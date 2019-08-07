<?php
function createArticles($json_string){
    echo "<div class='articles'>";
    $json_data = json_decode($json_string, true);
    for($x = 1; $x < count($json_data); $x++){
        $article = $json_data[$x];
        $date = getdate($article['post_date']);
        echo 
            "<div class='content-area'>
                <div class='content-title padding10'><h1>" . $article['title'] . "</h1></div>
                <div class='date padding10'>" . $date['month'] . " " . $date['mday'] . ", " . $date['year'] . "</div>
                <div class='author padding10'> by: " . $article['author'] . "</div>
                <div class='content padding10'>" . $article['content'] . "</div>";

                //Go through array of categories and put ',' before each except first
                //Only go through categories if there are more than 0
                if(count($article['category'])> 0){
                    echo "<div class='category padding10'>Categorized in: ";
                    echo ucfirst($article['category'][0]);
                    for($y = 1; $y < count($article['category']); $y++){
                        echo ", " . ucfirst($article['category'][$y]);
                    }
                }
                echo "</div>";//End Category

                //If last article do not put <hr> under
                if($x < count($json_data)-1){
                    echo "<hr>";
                }
            echo "</div>";//End Content Area
    }
    echo "</div>";//End Articles
}
?>