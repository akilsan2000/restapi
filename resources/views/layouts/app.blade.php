<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div id="response">API response here</div>
        <script>
            fetch('api/v1/products').then(function(response) {
                response.json().then(function(data) {
                    var str = JSON.stringify(data.products);
                    document.getElementById('response').innerHTML = str;
                });
            }).catch(function(err) {
                console.log('Error: ' +  err);
            });
        </script>
    </body>
</html>
