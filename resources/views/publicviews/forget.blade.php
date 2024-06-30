<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    <link rel="stylesheet" href="{{ url('CSS/forget.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
</head>
<body>
    <form action="{{ route('resetPassword') }}" method="post">
        @csrf
        <label>Veuillez entrer votre addresse mail</label><br>
        <input type="email" name="email" required>    
        <input type="submit" value="Valider">
    </form>
    @if(session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    title: 'Success!',
                    text: '{{ session("success") }}',
                    icon: 'success',
                    confirmButtonText: 'Cool'
                });
            });
        </script>
    @endif
</body>
</html>
