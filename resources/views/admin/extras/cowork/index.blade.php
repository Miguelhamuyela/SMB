<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var jancowork = JSON.parse('<?php echo $jancowork; ?>');

        var fecowork = JSON.parse('<?php echo $fecowork; ?>');
        var marcowork = JSON.parse('<?php echo $marcowork; ?>');
        var abrcowork = JSON.parse('<?php echo $abrcowork; ?>');
        var maiocowork = JSON.parse('<?php echo $maiocowork; ?>');
        var juncowork = JSON.parse('<?php echo $juncowork; ?>');
        var julcowork = JSON.parse('<?php echo $julcowork; ?>');
        var agocowork = JSON.parse('<?php echo $agocowork; ?>');
        var setcowork = JSON.parse('<?php echo $setcowork; ?>');
        var outcowork = JSON.parse('<?php echo $outcowork; ?>');
        var novcowork = JSON.parse('<?php echo $novcowork; ?>');
        var dezcowork = JSON.parse('<?php echo $dezcowork; ?>');
    const labels = [
        'Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
        'Outubro', 'Novembro', 'Dezembro'];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Total Parcial',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [jancowork, fecowork, marcowork, abrcowork, maiocowork, juncowork, julcowork, agocowork, setcowork, outcowork, novcowork, dezcowork],
        }]
    };


    const config = {
        type: 'line',
        data: data,
        options: {}
    };
</script>
<script>
    const cowork = new Chart(
        document.getElementById('cowork'),
        config
    );
</script>
