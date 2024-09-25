<!-- layout -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Social Empowerment Hub'; ?></title>
    <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/component-styles.css">
    <link rel="stylesheet" href="./assets/css/style.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="./assets/js/main.js" defer></script>
</head>
<body>
    <!-- Header -->
    <?php include('partials/_header.php') ?>
    <!-- EndHeader -->
    
    <!-- Main -->
    <?php include $content; ?>
    <!-- EndMain -->

    <!-- Footer -->
    <?php include('partials/_footer.php') ?>
    <!-- EndFooter -->

    <a href="#home" id="scrollUpBtn" class="btn btn-accent-alt-fill scroll-up-btn">
        <i class="uil uil-angle-up"></i>
    </a>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0XwuLhp5jN79a_KdEE4T9zdC8ALRQFsI&loading=async&libraries=maps&v=beta" defer>
    </script>
    
    <script>
        AOS.init();
        const alertBox = document.getElementById('alertBox');

        function validateForm() {
            let firstname = document.getElementById('firstname').value.trim();
            let lastname = document.getElementById('lastname').value.trim();
            let email = document.getElementById('email').value.trim();
            let message = document.getElementById('message').value.trim();

            if (firstname === '' || lastname === '') {
                showMessage('Your name is required', false);
                return false;
            }

            if (email === '') {
                showMessage('Email is required', false);
                return false;
            } else if (!isValidEmail(email)) {
                showMessage('Invalid email format', false);
                return false;
            }

            return true;
        }

        function isValidEmail(email) {
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return emailRegex.test(email);
        }

        function showMessage(message, success){
            const className = success ? 'validation-success' : 'validation-error';
            const alertIcon = success ? '<i class="uil uil-check-circle"></i>' : '<i class="uil uil-exclamation-circle"></i>';

            alertBox.innerHTML = `
                <span class="${className}-icon">${alertIcon}</span>
                <span class="${className}">
                    ${message}
                </span>`;

            setTimeout(() => {
                if (alertBox) {
                    alertBox.innerHTML = '';
                }
            }, 6000); 
        }

        function clearInputFields (){
            var inputFields = document.getElementsByClassName('contact-form-field');

            for (var i = 0; i < inputFields.length; i++) {
                inputFields[i].value = '';
            }
        }

        function submitForm() {
            if(validateForm()){ 
                startSpinner('btnSpinner');
                fetch('process_contact_form.php', {
                    method: 'POST',
                    body: new FormData(document.getElementById('contactForm')),
            })
            .then(response => response.json())
            .then(data => {
                stopSpinner('btnSpinner');
                showMessage(data.message, data.success);
                clearInputFields();
            })
            .catch(error => console.error('Error:', error));
            }
        }

        function startSpinner(elementId) {
            var element = document.getElementById(elementId);
            element.classList.add('btn-loading');
        }

        function stopSpinner(elementId) {
            var element = document.getElementById(elementId);
            if(element.classList.contains('btn-loading')){ 
            element.classList.remove('btn-loading');
            }
        }
        
    </script>

    <?php if (isset($pageSpecificJs) && !empty($pageSpecificJs)): ?>
        <script src="<?php echo htmlspecialchars($pageSpecificJs); ?>"></script>
    <?php endif; ?>

    <!-- <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
     </script> -->
    
</body>
</html>