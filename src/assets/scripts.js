document.addEventListener("DOMContentLoaded", function() {
    const generateButton = document.getElementById("generateButton");
    const phoneForm = document.getElementById("phoneForm");
    const phoneNumbersDiv = document.getElementById("phoneNumbers");
  
    generateButton.addEventListener("click", function() {
      const formData = new FormData(phoneForm);
      const xhr = new XMLHttpRequest();
      xhr.open("POST", "generatenumbers.php");
      xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
          if (xhr.status === 200) {
            const phoneNumbers = JSON.parse(xhr.responseText);
            const phoneList = document.createElement("ul");
            phoneNumbers.forEach(function(number) {
              const listItem = document.createElement("li");
              listItem.textContent = number;
              phoneList.appendChild(listItem);
            });
            phoneNumbersDiv.innerHTML = "";
            phoneNumbersDiv.appendChild(phoneList);
          } else {
            console.error("Error:", xhr.statusText);
          }
        }
      };
      xhr.send(formData);
    });
  });
  