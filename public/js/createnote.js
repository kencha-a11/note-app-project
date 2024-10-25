function validateNoteForm() {
    const noteTitle = document.getElementById("title");
    const noteDescription = document.getElementById("description");
    const noteContent = document.getElementById("content");
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

    // Validate description
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
