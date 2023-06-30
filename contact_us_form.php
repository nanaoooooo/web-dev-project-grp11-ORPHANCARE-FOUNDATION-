<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        /* Example CSS */
        body {
            background-color: #2d6f9563;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
            background-color: #ffffff91;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8%;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-group {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.3s ease, transform 0.3s ease;
            margin-bottom: 20px;
        }

        .form-group.show {
            opacity: 1;
            transform: translateY(0);
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            resize: vertical;
            height: 120px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4070f4;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #3062ec;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Form</h1>
        <form action="formdb.php" method="POST">
            <div class="form-group">
                <label for="message">Thank you for reaching out. What's your message about? <span style="color: red">*</span></label>
                <select name="message" id="message" required>
                    <option value="" disabled selected>Select an option</option>
                    <option value="know_more">I want to know more about you</option>
                    <option value="distress">I am in distress</option>
                    <option value="advice">I'm looking for some advice</option>
                    <option value="idea_opportunity">I have an idea or opportunity</option>
                    <option value="chat">I'd just like to chat</option>
                </select>
            </div>
            <div class="form-group">
                <label for="question">Great. What would you like to ask or tell us? <span style="color: red">*</span></label>
                <textarea name="question" id="question" required></textarea>
            </div>
            <div class="form-group">
                <label for="name">Thanks. Now let's get your contact details so we can get back to you. What's your name? <span style="color: red">*</span></label>
                <input type="text" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Please provide a phone number to contact you with <span style="color: red">*</span></label>
                <input type="tel" name="phone" id="phone" required>
            </div>
            <div class="form-group">
                <label for="email">And finally, could you let us know your email address? <span style="color: red">*</span></label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <button type="submit" class="button">Submit</button>
            </div>
        </form>
    </div>

    <script>
        const formGroups = document.querySelectorAll('.form-group');

        function showNextQuestion(index) {
            if (index < formGroups.length) {
                formGroups[index].classList.add('show');
                setTimeout(function() {
                    showNextQuestion(index + 1);
                }, 300);
            }
        }

        showNextQuestion(0);
    </script>
</body>
</html>
