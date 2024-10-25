function validateNoteForm() {
    const noteTitle = document.getElementById("title");
    const noteContent = document.getElementById("content");
    const noteDescription = document.getElementById("description");

    let valid = true;

    // Reset error messages
    document.getElementById("noteTitleError").style.display = "none";
    document.getElementById("noteContentError").style.display = "none";
    document.getElementById("noteDescriptionError").style.display = "none";

    // Validate title
    if (!noteTitle.value.trim()) {
        document.getElementById("noteTitleError").textContent = "Title is required.";
        document.getElementById("noteTitleError").style.display = "block";
        valid = false;
    }

    if (!noteDescription.value.trim()) {
        document.getElementById("noteDescriptionError").textContent = "Description is required.";
        document.getElementById("noteDescriptionError").style.display = "block";
        valid = false;
    }

    // Validate content
    if (!noteContent.value.trim()) {
        document.getElementById("noteContentError").textContent = "Content is required.";
        document.getElementById("noteContentError").style.display = "block";
        valid = false;
    }

    return valid;
}

function deleteNote() {
    // Show a confirmation dialog to the user
    const confirmation = confirm("Are you sure you want to delete this note?");
    
    if (confirmation) {
        // If confirmed, submit the form to delete the note
        document.getElementById('deleteForm').submit();
        alert("Note deleted successfully.");
    } else {
        // If canceled, do nothing
        alert("Note deletion canceled.");
    }
}