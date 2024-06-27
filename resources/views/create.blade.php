<!-- resources/views/ideprojet/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <style>
        body {
            /* background: linear-gradient(to right, #007FC2, #00aaff); */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 800px;
            position: relative;
            animation: fadeIn 1s;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .contact-form h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #E43433 !important;
            font-family: Flama Semicondensed Black !important;
            font-size: 30px !important;
            font-weight: 600 !important;
            line-height: 48px !important;
            animation: bounceIn 2s;
        }
        .contact-form .form-control {
            border-radius: 50px;
            margin-bottom: 15px;
            animation: zoomIn 1s;
        }
        .contact-form .btn-primary {
            border-radius: 50px;
            background-color: #E43433 !important;
            border: none;
            animation: pulse 2s infinite;
        }
        .contact-form .btn-primary:hover {
            background-color: #E43433 !important;
        }
        .contact-form .form-group {
            position: relative;
        }
        .contact-form .form-group i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }
        .contact-form textarea {
            margin-left: 10px;
            animation: fadeInRight 1s;
        }
        .contact-form label {
            font-size: 18px;
        }
        .logo {
            display: block;
            margin: 0 auto 20px;
            width: 150px;
            animation: fadeInDown 1s;
        }
    </style>
</head>
<body>
    <div class="contact-form animate__animated animate__fadeIn">
        <img src="{{ asset('image/fasoInova[1].png') }}" alt="Logo" class="logo animate__animated animate__fadeInDown">
        <h2 class="animate__animated animate__bounceIn">Avez-vous une idée innovante?</h2>
        <form>
            <div class="form-group animate__animated animate__zoomIn">
                <label for="title">Titre</label>
                <input type="text" id="title" class="form-control" placeholder="Donner un titre à votre projet" required>
            </div>
            <div class="form-group animate__animated animate__zoomIn">
                <label for="category">Catégorie</label>
                <input type="text" id="category" class="form-control" placeholder="Choisissez le domaine" required>
            </div>
            <div class="form-group animate__animated animate__fadeInRight">
                <label for="description">Description</label>
                <textarea id="description" class="form-control" placeholder="Decrivez votre idée" rows="5" required></textarea>
            </div>
            <div class="form-group animate__animated animate__zoomIn">
                <label for="file">Ajouter un fichier</label>
                <input type="file" id="file" class="form-control" placeholder="Ajouter un fichier" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block animate__animated animate__pulse">Soumettre</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
