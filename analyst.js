// JavaScript code can be added here for button functionality or other dynamic behavior
// For example, you can add event listeners to the buttons
const buttons = document.getElementsByClassName('button');

for (let i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener('click', function() {
        alert('Button ' + (i + 1) + ' clicked!');
    });
}