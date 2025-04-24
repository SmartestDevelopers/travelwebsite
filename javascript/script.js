document.addEventListener('DOMContentLoaded', () => {
    const display = document.getElementById('result');
    const buttons = document.querySelectorAll('button');
    let currentInput = '';
    let previousInput = '';
    let operation = null;
    let shouldResetDisplay = false;

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const value = button.textContent;

            if (button.classList.contains('number')) {
                if (shouldResetDisplay) {
                    display.value = '';
                    shouldResetDisplay = false;
                }
                display.value += value;
            } else if (button.classList.contains('operator')) {
                if (display.value !== '') {
                    previousInput = display.value;
                    operation = value;
                    shouldResetDisplay = true;
                }
            } else if (button.classList.contains('equals')) {
                if (previousInput && operation && display.value) {
                    const result = calculate(
                        parseFloat(previousInput),
                        parseFloat(display.value),
                        operation
                    );
                    display.value = result;
                    previousInput = '';
                    operation = null;
                }
            } else if (button.classList.contains('clear')) {
                display.value = '';
                currentInput = '';
                previousInput = '';
                operation = null;
            } else if (button.classList.contains('decimal')) {
                if (!display.value.includes('.')) {
                    display.value += '.';
                }
            }
        });
    });

    function calculate(num1, num2, operator) {
        switch (operator) {
            case '+':
                return num1 + num2;
            case '-':
                return num1 - num2;
            case '*':
                return num1 * num2;
            case '/':
                if (num2 === 0) {
                    alert('Cannot divide by zero!');
                    return 0;
                }
                return num1 / num2;
            default:
                return 0;
        }
    }
}); 