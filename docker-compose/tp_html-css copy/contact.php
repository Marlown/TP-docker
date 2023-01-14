<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>contact</title>
</head>

<body>

    <?php include 'header.php'; ?>

    <div class="img-contact">
        <img src="../assets/images/Contact.png" alt="">
    </div>

    <div class="m-right">
        <div class="adrs">
            <h2>Adresse</h2>
            <p>15 rue de la paix</p>
            <p>75010, Paris</p>
            <p>France</p>
            <p>+1 0805-54-801</p>
            <a href="#" class="link-contact">Other addresses</a>
        </div>
        <div class="info">
            <h2>Information</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, qui. Nulla itaque suscipit, similique sed aliquid natus repellat sequi dolores, nostrum rem, ullam consequuntur magni assumenda delectus autem ad non commodi doloribus eos blanditiis animi?</p>
        </div>
    </div>

    <div class="m-left">
        <form action="contact.php" method="get" class="form-contact">

            <div class="form-left">
                <div class="firstname">
                    <label for="firtname">Firstname :</label>
                    <input type="text" name="firstname" id="firstname">
                </div>
                <div class="email">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email">
                </div>
            </div>

            <div class="form-right">
                <div class="lastname">
                    <label for="lastname">Lastname :</label>
                    <input type="text" name="lastname" id="lastname">
                </div>
                <div class="agency">
                    <label for="agency">Nearest agency :</label>
                    <select name="agency" id="agency">
                        <option value="paris">Paris</option>
                        <option value="berlin">Berlin</option>
                        <option value="londre">Londre</option>
                    </select>
                </div>
            </div>
            <div class="form-center">
                <div class="message">
                    <label for="message">Message :</label>
                    <input type="text" name="message" id="message">
                </div>
            </div>

        </form>
    </div>
</body>

</html>