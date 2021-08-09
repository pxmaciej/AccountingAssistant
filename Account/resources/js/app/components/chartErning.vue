<script>
import { Line } from 'vue-chartjs'

export default {
  extends: Line,
  props: {
     label:{
         type: String
     },
    chartdata: {
      type: Array
    },
    options: {
      type: Object
    },
    chartColors:{
        type: Object
    }
  },
  mounted () {

      const dates = this.chartdata.map(d => d.date);
      const totals = this.chartdata.map(d => d.total);

      const {borderColor, pointBorderColor, pointBackgroundColor, backgroundColor } = this.chartColors;
    this.renderChart({
        labels: dates,
        datasets: [{
            label:this.label,
            data:totals,
            borderColor: borderColor,
            pointBorderColor: pointBorderColor,
            pointBackgroundColor: pointBackgroundColor,
            backgroundColor: backgroundColor

        }],

    }, this.options);
  }


}


</script>

<style>
</style>
