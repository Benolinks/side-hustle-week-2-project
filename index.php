<?php 

$votersAge = 18;

$votersPVC = "Yes";

$votersWard = 020;

if (($votersAge >= 18 ) && ($votersPVC == "Yes" ) &&($votersWard === 020)){
    echo "Voter is Eligible to vote  ";
}
    elseif ($votersAge < 18) {
       echo "Voters Age is less than 18 years !!";   
}

elseif ($votersPVC != "Yes" ) {
    echo "Voters doesn't have a PVC !!";   
}

elseif ($votersWard != 020 ) {
    echo "Unrecognised Voters Ward !!";   
}

else {
    echo "One of the requirment isn't met !!!";
}



?>