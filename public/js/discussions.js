function toggleCharts(id){
    gaugeID = "#gaugechart" + id;
    breakdownID = "#votebreakdown" + id;
    $(gaugeID).toggle();
    $(breakdownID).toggle();
}