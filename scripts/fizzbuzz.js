document.addEventListener('DOMContentLoaded', function() {
    const generateBtn = document.getElementById('generateBtn');
    const errorMessage = document.getElementById('errorMessage');
    
    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.style.display = 'block';
        
        document.getElementById('welcomeMessage').textContent = 'Welcome to FizzBuzz!';
        document.getElementById('fizzbuzzList').innerHTML = '';
    }
    
    function generateFizzBuzz() {

        errorMessage.style.display = 'none';
        errorMessage.textContent = '';
        
        const firstName = document.getElementById('firstName').value.trim();
        const middleInitial = document.getElementById('middleInitial').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const defaultWord = document.getElementById('defaultWord').value.trim();
        const count = parseInt(document.getElementById('count').value);
        const word1 = document.getElementById('word1').value.trim();
        const divisor1 = parseInt(document.getElementById('divisor1').value);
        const word2 = document.getElementById('word2').value.trim();
        const divisor2 = parseInt(document.getElementById('divisor2').value);
        const word3 = document.getElementById('word3').value.trim();
        const divisor3 = parseInt(document.getElementById('divisor3').value);
        
        if (!firstName || !lastName) {
            showError('First name and last name are required.');
            return;
        }
        
        if (middleInitial.length > 1) {
            showError('Middle initial must be a single character or empty.');
            return;
        }
        
        if (isNaN(count) || count < 1 || count > 500) {
            showError('Count must be a number between 1 and 500.');
            return;
        }
        
        if (isNaN(divisor1) || divisor1 < 1 || 
            isNaN(divisor2) || divisor2 < 1 || 
            isNaN(divisor3) || divisor3 < 1) {
            showError('All divisors must be positive numbers.');
            return;
        }
        
        let welcomeMessage = `Welcome, ${firstName}`;
        
        if (middleInitial) {
            welcomeMessage += ` ${middleInitial}.`;
        }
        
        welcomeMessage += ` ${lastName}!`;
        document.getElementById('welcomeMessage').textContent = welcomeMessage;
        
        const fizzbuzzList = document.getElementById('fizzbuzzList');
        fizzbuzzList.innerHTML = '';
        
        for (let i = 1; i <= count; i++) {
            let result = '';
            let className = 'number';
            
            // Check divisibility
            const isDivisibleBy1 = i % divisor1 === 0;
            const isDivisibleBy2 = i % divisor2 === 0;
            const isDivisibleBy3 = i % divisor3 === 0;
            
            if (isDivisibleBy1) {
                result += word1;
                className = 'word1';
            }
            
            if (isDivisibleBy2) {
                result += word2;
                className = isDivisibleBy1 ? 'combo' : 'word2';
            }
            
            if (isDivisibleBy3) {
                result += word3;
                if (isDivisibleBy1 || isDivisibleBy2) {
                    className = 'combo';
                } else {
                    className = 'word3';
                }
            }
            
            if (!isDivisibleBy1 && !isDivisibleBy2 && !isDivisibleBy3) {
                if (defaultWord === 'number') {
                    result = i.toString();
                } else {
                    result = defaultWord;
                    className = 'default-word';
                }
            }
            
            const item = document.createElement('li');
            item.className = `fizzbuzz-item ${className}`;
            item.textContent = result;
            fizzbuzzList.appendChild(item);
        }
    }
    
    generateBtn.addEventListener('click', generateFizzBuzz);
    
    generateFizzBuzz();
});