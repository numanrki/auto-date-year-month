function copyShortcodeAadmy(button, shortcode) {
  if (navigator.clipboard && window.isSecureContext) {
    // Use the Clipboard API if available
    navigator.clipboard.writeText(shortcode).then(() => {
      // Change the button text to "Copied"
      button.textContent = 'Copied';
      
      // Optionally, reset the button text back to "Copy" after a short delay
      setTimeout(() => {
        button.textContent = 'Copy';
      }, 3000); // 3 seconds delay
    }).catch(err => {
      console.error('Failed to copy: ', err);
    });
  } else {
    // Fallback if Clipboard API is not available
    const tempInput = document.createElement("input");
    tempInput.style.position = "absolute";
    tempInput.style.left = "-9999px";
    tempInput.value = shortcode;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    
    // Change the button text to "Copied"
    button.textContent = 'Copied';
    
    // Optionally, reset the button text back to "Copy" after a short delay
    setTimeout(() => {
      button.textContent = 'Copy';
    }, 3000); // 3 seconds delay
  }
}
