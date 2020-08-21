# LaTeX2HTML 2019 (Released January 1, 2019)
# Associate labels original text with physical files.


$key = q/fig:fig2./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig5./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig6./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig7./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

1;


# LaTeX2HTML 2019 (Released January 1, 2019)
# labels from external_latex_labels array.


$key = q/_/;
$external_latex_labels{$key} = q|<|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig2./;
$external_latex_labels{$key} = q|2|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig5./;
$external_latex_labels{$key} = q|III|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig6./;
$external_latex_labels{$key} = q|IV|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig7./;
$external_latex_labels{$key} = q|IV|; 
$noresave{$key} = "$nosave";

1;

