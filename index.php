


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./styles/main.css">
    <title>Kaloyan Kostadinov</title>
</head>

<body>
    <div class="grid">

        <?php
        // check if email already exists
            function isNewEmail($emailStr){
                $db = explode(" ", file_get_contents('registered_emails.txt'));
                return in_array($emailStr, $db);
            }
            $email = '';
            if(isset($_POST['email'])) {
                $email = $_POST['email'];
                // Return message depending on whether the email already exists
                if (!isNewEmail($_POST['email'])) {
                    // append to file
                    file_put_contents('registered_emails.txt', "$email ", FILE_APPEND);
                    echo "<div id='msg' style='display: block'>
                            <p id='msg-text'>Email $email has been added.</p>
                          </div>";
                } else {
                    echo "<div id='msg' style='display: block'>
                            <p id='msg-text'>Email $email already exists.</p>
                          </div>";
                }
            }
        ?>

        <header class="header"></header>

        <main>
            <section class="cards">
                <h2>Lorem ipsum dolor sit amet</h2>
                <div class="containers">
                    <div class="container">
                        <aside>
                            <h1>1</h1>
                        </aside>
                        <article>
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                        </article>
                        <img src="./assets/arrow.svg" alt="#" class="arrow" id="a1">
                    </div>
                    <div class="container">
                        <aside>
                            <h1>2</h1>
                        </aside>
                        <article>
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                        </article>
                        <img src="./assets/arrow.svg" alt="#" class="arrow" id="a2">
                    </div>
                    <div class="container">
                        <aside>
                            <h1>3</h1>
                        </aside>
                        <article>
                            <h4>Lorem ipsum dolor</h4>
                            <p>Lorem ipsum dolor sit amet consectetur</p>
                        </article>
                    </div>
                </div>
            </section>
            <div class="cards-2">
                <h2>Curabitur ut facilisis arcu</h2>
                <div class="containers-2">
                    <div class="pic-container">
                        <img src="./assets/avatar-woman.png" alt="#">
                        <article>
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id
                                facilisis
                                odio tempus eu.</p>
                        </article>
                    </div>
                    <div class="pic-container">
                        <img src="./assets/avatar-man.png" alt="#">
                        <article>
                            <h4>Lorem ipsum dolor sit amet</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id
                                facilisis
                                odio tempus eu.</p>
                        </article>
                    </div>
                </div>
            </div>

            <form id="form" class="form" method="POST" action="index.php">
                <h2>Lorem ipsum dolor sit amet</h2>
                <input type="email" name="email" id="email" required placeholder="EMAIL">
                <input type="submit" class="btn" name="submit">Lorem ipsum dolor sit amet</input>
            </form>

        </main>

        <a href="#form" class="btn btn-link">Lorem ipsum dolor sit amet</a>

        <section class="thumbs">
            <img src="./assets/icons-globe.png" alt="alt pic">
            <img src="./assets/icons-html.png" alt="alt pic">
            <img src="./assets/icons-js.png" alt="alt pic">
            <img src="./assets/icons-css.png" alt="alt pic">
            <img src="./assets/icons-wordpress.png" alt="alt pic">
        </section>
        <footer>
            <div class="links">
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
                <a href="#">Lorem ipsum</a>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat quam sem, id facilisis odio
                tempus eu. Curabitur ut facilisis arcu,<br>sed vehicula risus. Ut faucibus ut sapien at dictum. Ut ut
                elementum sem. Proin vulputate purus mauris.</p>
        </footer>
    </div>

</body>

</html>