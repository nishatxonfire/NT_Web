<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>বাংলালিংক লোন তথ্য</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        body {
            background-color: #000;
            color: #0f0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: fadeIn 1s ease-out;
        }

        .container {
            max-width: 500px;
            padding: 20px;
            background-color: #111;
            border: 1px solid #0f0;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0,255,0,0.3);
            text-align: center;
            animation: fadeIn 1.5s ease-out;
        }

        .logo {
            width: 120px;
            height: 120px;
            margin: 0 auto 20px;
            background-color: #000;
            border-radius: 50%;
            position: relative;
            border: 4px solid transparent;
            animation: glow 1.5s infinite;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            width: 80%;
            height: 80%;
            border-radius: 50%;
        }

        @keyframes glow {
            0%, 100% {
                box-shadow: 0 0 5px rgba(0, 255, 0, 0.8), 0 0 15px rgba(0, 255, 0, 0.4), 0 0 20px rgba(0, 255, 0, 0.2);
                border-color: rgba(0, 255, 0, 0.8);
            }
            50% {
                box-shadow: 0 0 10px rgba(0, 255, 0, 1), 0 0 30px rgba(0, 255, 0, 0.6), 0 0 40px rgba(0, 255, 0, 0.4);
                border-color: rgba(0, 255, 0, 1);
            }
        }

        form {
            margin-bottom: 20px;
            position: relative;
        }

        label {
            position: absolute;
            left: 10px;
            top: 10px;
            transition: all 0.3s ease;
            pointer-events: none;
            color: #0f0;
        }

        input[type="text"] {
            width: calc(100% - 18px);
            padding: 8px;
            font-size: 16px;
            border: 1px solid #0f0;
            border-radius: 4px;
            background-color: #000;
            color: #0f0;
            transition: box-shadow 0.3s ease;
            text-align: center;
        }

        input[type="text"]:focus + label,
        input[type="text"]:not(:placeholder-shown) + label {
            top: -20px;
            left: 10px;
            font-size: 12px;
            color: #0f0;
        }

        input[type="text"]:focus {
            box-shadow: 0 0 10px rgba(0,255,0,0.8);
            outline: none;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #000;
            color: #0f0;
            border: 1px solid #0f0;
            border-radius: 3px;
            cursor: pointer;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            margin-top: 19px;
        }

        button:hover {
            background-color: #0f0;
            color: #000;
            box-shadow: 0 0 15px rgba(0,255,0,0.8);
        }

        #response {
            margin-top: 20px;
            padding: 10px;
            text-align: left;
            animation: fadeIn 2s ease-out;
        }

        .row {
            display: flex;
            margin-bottom: 10px;
        }

        .col {
            flex: 1;
            padding: 5px;
        }

        .col.label {
            font-weight: bold;
        }

        .developer {
            text-align: center;
            margin-top: 20px;
        }

        .developer a {
            color: #0f0;
            text-decoration: underline;
        }

        .separator {
            border-top: 1px solid #0f0;
            margin: 20px 0;
        }

        .spinner {
            border: 4px solid rgba(255, 255, 255, 0.3);
            border-top: 4px solid #0f0;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .hidden {
            display: none;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="https://i.ibb.co/jhMSR0T/IMG-20240814-141315.png" alt="Logo">
        </div>
        <h2>বাংলালিংক লোন তথ্য</h2>
        <div class="separator"></div>
        <br>
        <form id="checkForm">
            <input type="text" id="phoneNumber" name="number" placeholder=" " required>
            <label for="phoneNumber">নম্বর: 019XXXXXXXX</label>
            <button type="submit">তথ্য দেখুন</button>
        </form>
        <div id="response"></div>
    </div>

    <div class="overlay hidden" id="overlay">
        <div class="spinner"></div>
    </div>

    <script>
        function showMessage(message, isError = false) {
            const responseDiv = document.getElementById('response');
            responseDiv.innerHTML = `<div class="${isError ? 'error' : ''}">${message}</div>`;
            const separator = document.createElement('div');
            separator.classList.add('separator');
            responseDiv.appendChild(separator);

            const developerDiv = document.createElement('div');
            developerDiv.classList.add('developer');
            developerDiv.innerHTML = 'Developer: <a href="আপনার লিংক এখানে দিন।">https://t.me/RNF_MODs</a>';
            responseDiv.appendChild(developerDiv);
        }

        document.getElementById('checkForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var phoneNumber = document.getElementById('phoneNumber').value;
            var overlay = document.getElementById('overlay');

            
            if (!/^019/.test(phoneNumber)) {
                showMessage('ত্রুটি: এটি বাংলালিংক নম্বর নয়।', true);
                return;
            }

            var apiUrl = "https://myblapi.banglalink.net/api/v1/emergency-balance/" + encodeURIComponent(phoneNumber);

            overlay.classList.remove('hidden');

            fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                overlay.classList.add('hidden');
                if (data.status === "SUCCESS") {
                    const loanInfo = data.data;

                 
                    if (loanInfo.id === undefined || loanInfo.msisdn === undefined || loanInfo.due_loan === undefined || loanInfo.expires_in === undefined) {
                        showMessage('Not:এই নাম্বারে লোন নেওয়া হয়নি।💰', true);
                    } else {
                        const infoHtml = `
                            <div class="row">
                                <div class="col label">আইডি:</div>
                                <div class="col">${loanInfo.id}</div>
                            </div>
                            <div class="row">
                                <div class="col label">ফোন নম্বর:</div>
                                <div class="col">${loanInfo.msisdn}</div>
                            </div>
                            <div class="row">
                                <div class="col label">বকেয়া লোন:</div>
                                <div class="col">${loanInfo.due_loan} টাকা</div>
                                                            </div>
                                                            <div class="row">
                                <div class="col label">মেয়াদ শেষের তারিখ:</div>
                                <div class="col">${loanInfo.expires_in}</div>
                                                            </div>
                                                        `;
                                                        document.getElementById('response').innerHTML = infoHtml;
                                                    }
                                                } else {
                                                    showMessage('ত্রুটি: তথ্য প্রদানে সমস্যা হয়েছে।', true);
                                                }
                                            })
                                            .catch(error => {
                                                overlay.classList.add('hidden');
                                                showMessage('ত্রুটি: সার্ভারের সমস্যা রয়েছে, কিছুক্ষণ পর আবার চেষ্টা করুন।', true);
                                                console.error('Error:', error);
                                            });
                                        });
                                    </script>
                                </body>
                                </html>
                                