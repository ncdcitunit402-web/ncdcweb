

<?php include("../header.php"); ?>
<link rel="stylesheet" href="/NCDC_MOHFW/assets/css/style.css">

<!-- HEADER IMAGE -->
<div class="header-image">
  <img src="/NCDC_MOHFW/uploads/header_image.png" 
       alt="Header Image of NCDC Website">
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback | NCDC</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        .container {
            width: 70%;
            margin: 40px auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
        }

        h2 {
            text-align: center;
            color: #003366;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
            vertical-align: top;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 95%;
            padding: 6px;
            border: 1px solid #999;
        }

        textarea {
            height: 90px;
            resize: none;
        }

        .submit-btn {
            padding: 8px 20px;
            background: #003366;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #00509e;
        }

        .note {
            font-size: 13px;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>Feedback Form</h2>

    <form action="submit_feedback.php" method="POST">
        <table border="1">
            <tr>
                <td width="30%">Your Name <span style="color:red">*</span></td>
                <td><input type="text" name="name" required></td>
            </tr>

            <tr>
                <td>Address <span style="color:red">*</span></td>
                <td><textarea name="address" required></textarea></td>
            </tr>

            <tr>
                <td>Mobile (With Country Code) <span style="color:red">*</span></td>
                <td>
                    <input type="text" name="mobile" placeholder="+91XXXXXXXXXX" required>
                </td>
            </tr>

            <tr>
                <td>Phone (With STD Code)</td>
                <td>
                    <input type="text" name="phone" placeholder="011-XXXXXXXX">
                </td>
            </tr>

            <tr>
                <td>Your Email <span style="color:red">*</span></td>
                <td><input type="email" name="email" required></td>
            </tr>

            <tr>
                <td>Description of Feedback <span style="color:red">*</span></td>
                <td><textarea name="description" required></textarea></td>
            </tr>

            <tr>
                <td>Reply Expected <span style="color:red">*</span></td>
                <td>
                    <input type="radio" name="reply_expected" value="Yes" required> Yes
                    &nbsp;&nbsp;
                    <input type="radio" name="reply_expected" value="No"> No
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <button type="submit" class="submit-btn">Submit Feedback</button>
                </td>
            </tr>
        </table>

        <div class="note">
            <b>Note:</b> Fields marked with <span style="color:red">*</span> are mandatory.
        </div>
    </form>
</div>

</body>
</html>

<?php include("../footer.php"); ?>
