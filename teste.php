<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body style="background-color: chocolate;">

    <?php
    $nome = $_GET['nome'];
    function contarSim($resposta)
    {
        return $resposta;
    }

    $contadora = 0;

    if (isset($_GET['a1']) && contarSim($_GET['a1'])) {
        $contadora++;
    }
    if (isset($_GET['a2']) && contarSim($_GET['a2'])) {
        $contadora++;
    }
    if (isset($_GET['a3']) && contarSim($_GET['a3'])) {
        $contadora++;
    }
    if (isset($_GET['a4']) && contarSim($_GET['a4'])) {
        $contadora++;
    }
    if (isset($_GET['a5']) && contarSim($_GET['a5'])) {
        $contadora++;
    }
    if (isset($_GET['a6']) && contarSim($_GET['a6'])) {
        $contadora++;
    }
    if (isset($_GET['a7']) && contarSim($_GET['a7'])) {
        $contadora++;
    }
    if (isset($_GET['a8']) && contarSim($_GET['a8'])) {
        $contadora++;
    }
    if (isset($_GET['a9']) && contarSim($_GET['a9'])) {
        $contadora++;
    }
    if (isset($_GET['a10']) && contarSim($_GET['a10'])) {
        $contadora++;
    }

    $contadorb = 0;

    if (isset($_GET['b1']) && contarSim($_GET['b1'])) {
        $contadorb++;
    }
    if (isset($_GET['b2']) && contarSim($_GET['b2'])) {
        $contadorb++;
    }
    if (isset($_GET['b3']) && contarSim($_GET['b3'])) {
        $contadorb++;
    }
    if (isset($_GET['b4']) && contarSim($_GET['b4'])) {
        $contadorb++;
    }
    if (isset($_GET['b5']) && contarSim($_GET['b5'])) {
        $contadorb++;
    }
    if (isset($_GET['b6']) && contarSim($_GET['b6'])) {
        $contadorb++;
    }
    if (isset($_GET['b7']) && contarSim($_GET['b7'])) {
        $contadorb++;
    }
    if (isset($_GET['b8']) && contarSim($_GET['b8'])) {
        $contadorb++;
    }
    if (isset($_GET['b9']) && contarSim($_GET['b9'])) {
        $contadorb++;
    }
    if (isset($_GET['b10']) && contarSim($_GET['b10'])) {
        $contadorb++;
    }

    $contadorc = 0;

    if (isset($_GET['c1']) && contarSim($_GET['c1'])) {
        $contadorc++;
    }
    if (isset($_GET['c2']) && contarSim($_GET['c2'])) {
        $contadorc++;
    }
    if (isset($_GET['c3']) && contarSim($_GET['c3'])) {
        $contadorc++;
    }
    if (isset($_GET['c4']) && contarSim($_GET['c4'])) {
        $contadorc++;
    }
    if (isset($_GET['c5']) && contarSim($_GET['c5'])) {
        $contadorc++;
    }
    if (isset($_GET['c6']) && contarSim($_GET['c6'])) {
        $contadorc++;
    }
    if (isset($_GET['c7']) && contarSim($_GET['c7'])) {
        $contadorc++;
    }
    if (isset($_GET['c8']) && contarSim($_GET['c8'])) {
        $contadorc++;
    }
    if (isset($_GET['c9']) && contarSim($_GET['c9'])) {
        $contadorc++;
    }
    if (isset($_GET['c10']) && contarSim($_GET['c10'])) {
        $contadorc++;
    }
    $s = max($contadora, $contadorb, $contadorc);

    if ($contadora == $s) {
        echo "Parabéns, <strong>$nome</strong> você é Visual <br><br>";
        echo "A pessoa com predominância visual é ligada na beleza e estética, em formas de detalhes. Tem uma postura corporal rigida e sua respiração é torácica. Ela fala muito rapidamente, porque as imagens se sucedem em sua mente, como um filme. Entre o prático e o bonito, a pessoa visual sempre escolherá o bonito. Normalmente é obcecada por arrumação e ordem e para atender o que lhe dizem, a pessoa visual precisa que mostrem o que é. O visual não dá valor as palavras e não reage bem ao toque ao contrário da pessoa cinestésico.<br><br>";
    }
    if ($contadorb == $s) {
        
        echo "Parabéns, <strong>$nome</strong> você é Auditivo<br><br>";
        echo "A pessoa com predominancia auditiva, não dá grande valor às aparências, mas sim ao bom papo, bom senso e inteligência. São equilibradas e estão sempre prontas a discutir os problemas, pois acreditam na lógica dos argumentos. O tom de voz é médio, a respiração é torácica e abdominal. A memória para os sons é fantástica: São capazes de lembrar-se de coisas que lhes foram ditas há muitos anos. O barulho, vozes, estridentes ou ásperas ferem as pessoas auditivas. Apreciam músicas com letras bem elaboradas que passam uma mensagem consistente. Para ter certeza de alguma coisa, o auditivo precisa ouvir, do contrário, não acreditará.<br><br>";
    }
    if ($contadorc == $s) {
        
        echo "Parabéns, <strong>$nome</strong> você é Cinestésico<br><br>";
        echo "A pessoa com predominância do canal cinestésico é, dos 3 tipos, o mais sujeito ao sofrimento. Para esta pessoa, todas as experiências são físicas. Esta pessoa prefere conforto à beleza e busca sempre o bem-estar, o prazer e o aconchego. Este tipo de pessoa precisa ser abraçado, tocada, beijada, para que se sinta amada. Ela prefere roupas velhas e confortáveis, sapatos que não apertem, nadar, pisar na areia, estar junto a natureza. As pessoas cinestésicas possui o tom de voz baixo, ritmo lento e respiração abdominal. Gostam de músicas lentas e baladas e se sentem agredidas quando não são correspondidas em sua necessidade de contato corporal. <br><br>";
    }
    ?>
    <fieldset>
        <center>
    <?php
    echo "O número de opções assinaladas na série A foram $contadora<br>";
    echo "O número de opções assinaladas na série B foram $contadorb<br>";
    echo "O número de opções assinaladas na série C foram $contadorc<br>";
    ?>
    </center>
    </fieldset>
    <button onclick="javascript:history.go(-1)">Voltar</button>
</body>
</html>