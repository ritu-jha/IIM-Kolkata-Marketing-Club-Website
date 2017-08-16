    <?php
    function paginate($reload, $page, $tpages) {
        $adjacents = 2;
        $prevlabel = "&lsaquo; Prev";
        $nextlabel = "Next &rsaquo;";
        $out = "";
        // previous
        if ($page == 1) {
            $out.= "<span>".$prevlabel."</span>\n";
        } elseif ($page == 2) {
            $out.="<li><a href=\"".$reload."\">".$prevlabel."</a>\n</li>";
        } else {
            $out.="<li><a href=\"".$reload."&amp;page=".($page - 1)."\">".$prevlabel."</a>\n</li>";
        }
        $pmin=($page>$adjacents)?($page - $adjacents):1;
        $pmax=($page<($tpages - $adjacents))?($page + $adjacents):$tpages;
        
        
        
        if ($page < $tpages) {
            $out.= "<li><a href=\"".$reload."&amp;page=".($page + 1)."\">".$nextlabel."</a>\n</li>";
        } else {
            $out.= "<span style='font-size:11px'>".$nextlabel."</span>\n";
        }
        $out.= "";
        return $out;
    }

    ?>