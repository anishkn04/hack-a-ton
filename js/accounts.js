document.getElementById("signupForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();
    let email = document.getElementById("mememail").value;
    // console.log(email);
    fetchAndProcessJSON(email);


    async function fetchAndProcessJSON(email) {
      try {
        const response = await fetch("../resources/contacts.json");
        if (!response.ok) {
          throw new Error("Failed to fetch JSON");
          event.preventDefault();
        }
        const data = await response.json();
    
        console.log(data);
        for (let member of data.members) {
          if (member.email === email) {
            return true;
          }
        }
    
        alert("Only members are allowed to register");
        event.preventDefault();
      } catch (error) {
        console.error("Error fetching or processing JSON:", error);
        return null;
      }
    }
  });

