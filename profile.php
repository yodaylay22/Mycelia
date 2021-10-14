<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <title>Mycelia Framework</title>
</head>
<body class="bg-gradient-to-b from-gray-600 to-gray-700 h-screen h-full">

  <div>
    <?php
      $data = $db->select("users", "*", [ "name[~]" => $name ]);
      if(!isset($data[0]['name'])){
        $data[0]['name'] = "🤐";
      }
    ?>

    <p class="text-center text-white font-sans py-4 text-5xl" style="padding-top: 40vh;"><?=$data[0]['name']?>'s Profile! 📖</p>
   

  </div>

  
</body>
</html>