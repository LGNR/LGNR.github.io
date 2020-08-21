# LaTeX2HTML 2019 (Released January 1, 2019)
# Associate labels original text with physical files.


$key = q/fig:fig1./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig2./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig3./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig4./;
$external_labels{$key} = "$URL/" . q|main.html|; 
$noresave{$key} = "$nosave";

1;


# LaTeX2HTML 2019 (Released January 1, 2019)
# labels from external_latex_labels array.


$key = q/fig:fig1./;
$external_latex_labels{$key} = q|1|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig2./;
$external_latex_labels{$key} = q|2|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig3./;
$external_latex_labels{$key} = q|3|; 
$noresave{$key} = "$nosave";

$key = q/fig:fig4./;
$external_latex_labels{$key} = q|4|; 
$noresave{$key} = "$nosave";

1;

