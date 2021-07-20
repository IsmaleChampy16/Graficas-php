am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end
    
    // Create chart instance
    var chart = am4core.create("chartdiv3", am4charts.PieChart);
    var OpcionA = 30;
    var OpcionB = 50;
    var OpcionC = 20;


  chart.data = [ {
      "puesto": "Reclutador",
      "porcentaje": OpcionA
    }, {
      "puesto": "Administrador",
      "porcentaje": OpcionB
    }, {
      "puesto": "Gerente",
      "porcentaje": OpcionC
    }
  ];  
  
  // Add data
  
    
    // Add and configure Series
    var pieSeries = chart.series.push(new am4charts.PieSeries());
    pieSeries.dataFields.value = "porcentaje";
    pieSeries.dataFields.category = "puesto";
    pieSeries.slices.template.stroke = am4core.color("#fff");
    pieSeries.slices.template.strokeWidth = 2;
    pieSeries.slices.template.strokeOpacity = 4;
    
    // This creates initial animation
    pieSeries.hiddenState.properties.opacity = 1;
    pieSeries.hiddenState.properties.endAngle = -90;
    pieSeries.hiddenState.properties.startAngle = -90;
    
    }); // end am4core.ready()

