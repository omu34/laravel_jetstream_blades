<!DOCTYPE html>
<html>
<head>
    <title>SweetAlert Example</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<button id="show-alert">Show SweetAlert</button>

<script src="{{ asset('js/app.js') }}"></script>
<script>
document.getElementById("show-alert").addEventListener("click", function() {
    Swal.fire({
        title: 'Hello!',
        text: 'This is a SweetAlert example in Laravel.',
        icon: 'success',
        confirmButtonText: 'OK'
    });
});
</script>

</body>
</html>
