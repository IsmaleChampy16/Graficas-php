am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    var chart = am4core.create("chartdiv5", am4charts.ChordDiagram);
    chart.hiddenState.properties.opacity = 0;
    
    chart.data = [
        { from: "A", to: "D", value: 10 },
        { from: "B", to: "D", value: 8 },
        { from: "B", to: "E", value: 4 },
        { from: "B", to: "C", value: 2 },
        { from: "C", to: "E", value: 14 },
        { from: "E", to: "D", value: 8 },
        { from: "C", to: "A", value: 4 },
        { from: "G", to: "A", value: 7 },
        { from: "D", to: "B", value: 1 }
    ];
    
    chart.dataFields.fromName = "from";
    chart.dataFields.toName = "to";
    chart.dataFields.value = "value";
    
    // make nodes draggable
    var nodeTemplate = chart.nodes.template;
    nodeTemplate.readerTitle = "Click to show/hide or drag to rearrange";
    nodeTemplate.showSystemTooltip = true;
    nodeTemplate.cursorOverStyle = am4core.MouseCursorStyle.pointer
    
    }); // end am4core.ready()