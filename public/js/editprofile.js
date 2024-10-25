
    // // Wait for the DOM to fully load
    // document.addEventListener('DOMContentLoaded', () => {
    //     // Get the form element
    //     const editForm = document.querySelector('.edit-form');

    //     // Add an event listener for form submission
    //     editForm.addEventListener('submit', (event) => {
    //         event.preventDefault(); // Prevent the default form submission

    //         // Get form values
    //         const name = document.getElementById('name').value;
    //         const email = document.getElementById('email').value;
    //         const bio = document.getElementById('bio').value;

    //         // For demonstration, we'll just log the values to the console
    //         console.log('Name:', name);
    //         console.log('Email:', email);
    //         console.log('Bio:', bio);

    //         // Show an alert with the submitted information
    //         alert(`Profile updated!\n\nName: ${name}\nEmail: ${email}\nBio: ${bio}`);

    //         // Optionally, here you could send the data to a server
    //         // For example, using fetch to POST to an API
    //         // fetch('/api/updateProfile', {
    //         //     method: 'POST',
    //         //     headers: {
    //         //         'Content-Type': 'application/json'
    //         //     },
    //         //     body: JSON.stringify({ name, email, bio })
    //         // })
    //         // .then(response => response.json())
    //         // .then(data => {
    //         //     console.log('Success:', data);
    //         // })
    //         // .catch((error) => {
    //         //     console.error('Error:', error);
    //         // });
    //     });
    // });

    function validateNoteForm() {
        const noteTitle = document.getElementById("name");
        const noteContent = document.getElementById("email");
        const noteDescription = document.getElementById("bio");
    
        let valid = true;
    
        // Reset error messages
        document.getElementById("userNameError").style.display = "none";
        document.getElementById("userEmailError").style.display = "none";
        document.getElementById("userBioError").style.display = "none";
    
        // Validate title
        if (!noteTitle.value.trim()) {
            document.getElementById("userNameError").textContent = "Name is required.";
            document.getElementById("userNameError").style.display = "block";
            valid = false;
        }
    
        if (!noteDescription.value.trim()) {
            document.getElementById("userEmailError").textContent = "Email is required.";
            document.getElementById("userEmailError").style.display = "block";
            valid = false;
        }
    
        // Validate content
        if (!noteContent.value.trim()) {
            document.getElementById("userBioError").textContent = "Bio is required.";
            document.getElementById("userBioError").style.display = "block";
            valid = false;
        }
    
        return valid;
    }