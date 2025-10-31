<?php include('template/head.php') ?>
<?php include('template/header.php') ?> 
    <style>
        body {
            background: url('media/bg1.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            max-width: 420px;
            margin: 40px auto;
            padding: 25px 30px;
            margin-left: auto;
            margin-right: 100px;
            margin-top: 40px;

            background: rgba(0, 0, 0, 0.25);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(10px);

            border-radius: 12px;
            border: 1px solid rgba(255,255,255,0.35); /* viền nhẹ */

            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            font-size: 26px;
            color: #ffffffff;
            font-weight: 600;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 6px;
            display: block;
            color: #fff;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px;
            border-radius: 6px;
            border: 1px solid rgba(255,255,255,0.4); /* chỉnh lại: viền sáng hơn */
            font-size: 15px;
            transition: 0.2s;
            color: #fff;
            background: rgba(255,255,255,0.1);
        }

        .form-group input::placeholder {
            color: rgba(255,255,255,0.7);
        }

        .form-group input:focus {
            border-color: #4A90E2;
            box-shadow: 0 0 4px rgba(74,144,226,0.4);
        }

        .btn {
            width: 100%;
            padding: 10px 0;
            background: #4A90E2;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
            transition: 0.2s;
        }

        .btn:hover {
            background: #3B7BC0;
        }

        .message {
            text-align: center;
            margin-top: 15px;
            color: #fff;
        }

        .message a {
            color: #4A90E2;
            text-decoration: none;
            font-weight: 600;
        }

        .message a:hover {
            text-decoration: underline;
        }
    </style>

    <div class="container">
        <h2>Sign Up</h2>
        <form method="POST" action="controller/c_signup.php">
            <div class="form-group">
                <label for="username">Email Address</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <button type="submit" class="btn">Sign up</button>
        </form>
        <p class="message" >Already have an account? <a href="signin.php">Sign in</a></p> 
    </div>
<?php include('template/footer.php') ?>