
<?php
    $partite = [
        [
            "casa" => "Olimpia Milano",
            "ospite" => "Cantù",
            "puntiCasa" => "55",
            "puntiOspite" => "60",
        ],
        [
            "casa" => "Torino",
            "ospite" => "Venezia",
            "puntiCasa" => "33",
            "puntiOspite" => "60",
        ]
    ];

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
    $message = 'Non hai inserito dei dati validi!';
} elseif (strlen($name) > 3 && strpos($mail, '@') != false && strpos($mail, '.') != false && is_numeric($age) != false) {
    $message = 'Accesso riuscito!';
} else {
    $message = 'Accesso negato';
} 
?>
<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

$newArray = [];
while (count($newArray) < 15) {
    $number = rand(1, 15);
    if(!in_array($number, $newArray)){
        $newArray[] = $number;
    }
}

$paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint quod sapiente maiores, quae blanditiis ea, aliquid aperiam facere vel facilis perspiciatis aut. Quis tenetur amet impedit eum sapiente tempore sint deserunt illum necessitatibus aperiam commodi, architecto quas eaque qui rerum. Cumque illo velit dolores saepe quaerat atque nulla vero sapiente!"
?>
<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// foreach ($db as $y => $y_value){
//     if(strpos($db, "teachers") !== false){
//         $class = "blue";
//     }else{
//         $class = "red";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
    <style>
    body{
        text-align: center;
    }
    .red{
        color: red;
        list-style-type: none;
    }
    .blue{
        color: blue;
    }
    ul{
        list-style-type: none;
    }
</style>
</head>
<body>
    <h2>Snack 1</h2>
    <ul> <?php for ($i = 0; $i < count($partite); $i++) { ?>
            <li>
                <?php echo 'Match: ' . "{$partite[$i]['casa']}"; ?>
                <?php echo ' - ' . "{$partite[$i]['ospite']}"; ?>
                <?php echo ' | Risultato: ' . "{$partite[$i]['puntiOspite']}"; ?>
                <?php echo ' - ' . "{$partite[$i]['puntiCasa']}";
                } ?>
            </li>
    </ul>
    
    <h2>Snack 2</h2>
    <p><?php echo $message ?></p>

    <h2>Snack 3</h2>

    <ul><?php foreach($posts as $x => $x_value){?>
    <li>
        <?php echo "Data: " . $x; ?> <br>
        <?php
            foreach($x_value as $prop => $item){
                echo "<li>{$item["title"]}</li>";
                echo "<li>{$item["author"]}</li>";
                echo "<li>{$item["text"]}</li>";
            };
    }?>    

    
    </li>
    </ul>

    <h2>Snack 4</h2>
    <p>
    <?php   
        var_dump($newArray);
    ?>
    </p>

    <h2>Snack 5</h2>
    <p> 
    <?php
    var_dump(explode(".", $paragrafo));
    ?>
    </p>

    <!-- <h2>Snack 6</h2>
    <?php
    //foreach ($db as $x => $x_value){ ?>
    <div class="<?php //echo $class ?>"><?php //echo "ruolo: " . $x; }?></div> -->
    
<script src="js/script.js" ></script>
</body>
</html>


