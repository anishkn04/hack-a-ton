<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List and WakaTime Stats</title>
    <link rel="stylesheet" href="status.css">
</head>
<body>
    <h1>User List</h1>
    <ul id="userList">
        <?php
        // Define user data as an associative array
        $users = [
            'anishkn04' => 'Anish Neupane',
            'Rushab' => 'Rushav Rishal',
            'prayojan' => 'Prayojan Puri',
            'Prawin' => 'Prawin Yadav',
            'rishavosaurus' => 'Rishav Chapagain',
            'neezpau' => 'Nishan Paudel',
            'manishrajupreti' => 'Manish Raj Upreti',
            'aashishbishow' => 'Aashish BishowKarma',
            'Abhishekbt' => 'Abhishek Bhattarai'
        ];

        // Function to fetch profile picture URL from WakaTime API
        function fetchProfilePictureUrl($username) {
            $apiUrl = "https://wakatime.com/api/v1/users/{$username}";

            // Initialize cURL session
            $ch = curl_init();

            // Set cURL options
            curl_setopt($ch, CURLOPT_URL, $apiUrl);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            // Execute cURL session
            $response = curl_exec($ch);

            // Check for errors
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
                curl_close($ch);
                return null;
            }

            // Close cURL session
            curl_close($ch);

            // Decode JSON response
            $userData = json_decode($response, true);

            // Check if response is valid and contains profile picture URL
            if ($userData && isset($userData['data']['photo'])) {
                return $userData['data']['photo'];
            } else {
                return null; // Handle error or no profile picture found
            }
        }

        // Function to fetch WakaTime stats and cache in .json file
        function fetchWakaTimeStats($username, $range = 'today') {
            $cacheDir = 'cache/';
            $cacheFile = "{$cacheDir}{$username}_{$range}.json";
            
            // Create cache directory if it doesn't exist
            if (!file_exists($cacheDir)) {
                mkdir($cacheDir, 0777, true);
            }
            
            // Check if cached data exists and is recent (e.g., cache for 1 hour)
            if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < 3600) {
                // Load cached data from .json file
                $response = file_get_contents($cacheFile);
            } else {
                // Fetch fresh data from WakaTime API
                $url = "https://wakatime.com/api/v1/users/{$username}/summaries?range={$range}";
                $curl = curl_init();
                curl_setopt_array($curl, [
                    CURLOPT_RETURNTRANSFER => 1,
                    CURLOPT_URL => $url,
                ]);
                $response = curl_exec($curl);
                curl_close($curl);
                
                // Save response to cache file
                file_put_contents($cacheFile, $response);
            }
            
            return $response;
        }

        // Loop through the users array and generate list items with links and profile pictures
        foreach ($users as $username => $fullName) {
            // Fetch profile picture URL
            $profilePictureUrl = fetchProfilePictureUrl($username);

            // Output list item with profile picture and link
            echo "<li>";
            if ($profilePictureUrl) {
                echo "<a href='status.php?username=$username'>";
                echo "<img src='{$profilePictureUrl}' alt='{$fullName}' class='profile-img'>";
                echo "</a>";
            } else {
                // Placeholder image if profile picture is not available
                echo "<img src='placeholder.png' alt='Profile Picture' class='profile-img'>";
            }
            echo "<a href='status.php?username=$username'>$fullName</a>";
            echo "</li>";
        }
        ?>
    </ul>

    <?php
    if (isset($_GET['username'])) {
        $username = $_GET['username'];

        // Fetch WakaTime stats for today and display
        $todayStats = fetchWakaTimeStats($username, 'today');
        displayWakaTimeStats($todayStats, 'WakaTime Coding Stats (Today)');
        
        // Fetch WakaTime stats for last 7 days and display
        $last7DaysStats = fetchWakaTimeStats($username, 'last_7_days');
        displayWakaTimeStats($last7DaysStats, 'WakaTime Coding Stats (Last 7 Days)');
    }

    function displayWakaTimeStats($statsJson, $title) {
        $data = json_decode($statsJson, true);

        if (!empty($data) && isset($data['data'])) {
            echo "<div class='chart-container'>";
            echo "<h1>$title</h1>";
            echo "<div class='chart'>";

            foreach ($data['data'] as $day_data) {
                $date = date('Y-m-d', strtotime($day_data['range']['date']));
                $total_seconds = $day_data['grand_total']['total_seconds'] ?? 0;

                $total_hours = $total_seconds / 3600;
                $bar_height = $total_hours * 20; // Convert hours to pixels for bar height

                echo "<div class='bar' style='height: {$bar_height}px;' title='{$total_hours} hours'>";
                echo "{$total_hours}h"; // Display total hours inside the bar
                echo "<div class='info'><br>{$date}</div>";
                echo "</div>";
            }

            echo "</div>";
            echo "<div class='day-names'>";
            foreach ($data['data'] as $day_data) {
                $day_name = date('D', strtotime($day_data['range']['date']));
                echo "<div>{$day_name}</div>";
            }
            echo "</div>";
            echo "</div>";
        } else {
            echo "<p>No data available for $title.</p>";
        }
    }
    ?>
</body>
</html>
