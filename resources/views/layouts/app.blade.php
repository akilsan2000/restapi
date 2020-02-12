<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div id="response">API response here</div>
        <script>
        fetch('api/v1/products').then(function(response) {
            response.text().then(function(data) {
                document.getElementById('response').innerHTML = data;
            });
        }).catch(function(err) {
            console.log('Error: ' +  err);
        });
        </script>
    </body>
</html>
