<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var janAuditoriums = JSON.parse('<?php echo $janAuditoriums; ?>');

        var feAuditoriums = JSON.parse('<?php echo $feAuditoriums; ?>');
        var marAuditoriums = JSON.parse('<?php echo $marAuditoriums; ?>');
        var abrAuditoriums = JSON.parse('<?php echo $abrAuditoriums; ?>');
        var maioAuditoriums = JSON.parse('<?php echo $maioAuditoriums; ?>');
        var junAuditoriums = JSON.parse('<?php echo $junAuditoriums; ?>');
        var julAuditoriums = JSON.parse('<?php echo $julAuditoriums; ?>');
        var agoAuditoriums = JSON.parse('<?php echo $agoAuditoriums; ?>');
        var setAuditoriums = JSON.parse('<?php echo $setAuditoriums; ?>');
        var outAuditoriums = JSON.parse('<?php echo $outAuditoriums; ?>');
        var novAuditoriums = JSON.parse('<?php echo $novAuditoriums; ?>');
        var dezAuditoriums = JSON.parse('<?php echo $dezAuditoriums; ?>');
    const labels = [
        'Janeiro', 'Fevereiro ', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Ago', 'Setembro',
        'Outubro', 'Novembro', 'Dezembro'];

    const data = {
        labels: labels,
        datasets: [{
            label: 'Total Parcial',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [janAuditoriums, feAuditoriums, marAuditoriums, abrAuditoriums, maioAuditoriums, junAuditoriums, julAuditoriums, agoAuditoriums, setAuditoriums, outAuditoriums, novAuditoriums, dezAuditoriums],
        }]
    };


    const config = {
        type: 'line',
        data: data,
        options: {}
    };
</script>
<script>
    const Auditoriums = new Chart(
        document.getElementById('Auditoriums'),
        config
    );
</script>
