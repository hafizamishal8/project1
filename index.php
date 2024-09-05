
<!DOCTYPE html>
<html lang="en">
 
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <div class="form container">

        </h2>Simple Form</h2>

        <form method="post">
            <div class="form-group">

                <label for="name"> Full Name: </label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" >

            </div>

            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" >
            </div>

            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="telephone" id="phone" name="phone" placeholder="Enter your phone number">
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" placeholder="Enter your age">
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender">
                    <option value="">Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="message">Your Message:</label>
                <textarea id="message" name="message" rows="4" placeholder="Enter your message here"></textarea>
            </div>

            <div class="form-group">
                <button type="submit">Submit</button>
            </div>

        </form>

    </div>
</body>

</html>













</html>