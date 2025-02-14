document.getElementById('addAttachmentButton').addEventListener('click', function() {
    const attachmentInput = document.getElementById('attachmentInput');
    const file = attachmentInput.files[0];

    if (!file) {
        alert('Please select an image file!');
        return;
    }

    const reader = new FileReader();
    reader.onload = function(e) {
        const fileData = {
            name: file.name,
            content: e.target.result // Base64 data of the image
        };

        addAttachmentToList(fileData);
        attachmentInput.value = ''; // Clear input after adding
    };
    reader.readAsDataURL(file);
});

function addAttachmentToList(fileData) {
    const attachmentList = document.getElementById('attachmentList');
    
    const li = document.createElement('li');
    li.innerHTML = `
        <span>${fileData.name}</span>
        <button class="view-button">View</button>
    `;
    
    li.querySelector('.view-button').addEventListener('click', function() {
        openModal(fileData.content);
    });
    
    attachmentList.appendChild(li);
}

function openModal(imageSrc) {
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    
    modal.style.display = 'block';
    modalImage.src = imageSrc; // Set the image in the modal

    // Close modal when clicking on the close button
    document.getElementById('closeModal').addEventListener('click', closeModal);
    
    // Close modal if clicked outside of the image
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeModal();
        }
    });
}

function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
}
