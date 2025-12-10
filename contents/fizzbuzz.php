<div class="form-container">
                <h2>Your Information & FizzBuzz Parameters</h2>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" id="firstName" placeholder = "First name">
                    </div>
                    
                    <div class="form-group">
                        <label for="middleInitial">Middle Initial</label>
                        <input type="text" id="middleInitial" maxlength="1" placeholder = "A">
                    </div>
                    
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" id="lastName" placeholder = "Last name">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="defaultWord">Default Word</label>
                        <input type="text" id="defaultWord" placeholder = "Word" value=" Cardinal">
                    </div>
                    
                    <div class="form-group">
                        <label for="count">Count</label>
                        <input type="number" id="count" min="1" max="500" value="111">
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group">
                        <label for="word1">Word 1</label>
                        <input type="text" id="word1" value="Fizz">
                    </div>
                    
                    <div class="form-group">
                        <label for="divisor1">Divisor 1</label>
                        <input type="number" id="divisor1" min="1" value="3">
                    </div>
                    
                    <div class="form-group">
                        <label for="word2">Word 2</label>
                        <input type="text" id="word2" value="Buzz">
                    </div>
                    
                    <div class="form-group">
                        <label for="divisor2">Divisor 2</label>
                        <input type="number" id="divisor2" min="1" value="5">
                    </div>
                    
                    <div class="form-group">
                        <label for="word3">Word 3</label>
                        <input type="text" id="word3" value="Bang">
                    </div>
                    
                    <div class="form-group">
                        <label for="divisor3">Divisor 3</label>
                        <input type="number" id="divisor3" min="1" value="7">
                    </div>
                </div>
                
                <button id="generateBtn">Generate FizzBuzz!</button>
                <div id="errorMessage" class="error-message"></div>
            </div>
            
            <div class="results-container">
                <h3 id="welcomeMessage">Welcome to FizzBuzz!</h3>
                <h2>Generated FizzBuzz Sequence</h2>
                <ol id="fizzbuzzList" class="fizzbuzz-list">
                </ol>
            </div>