    $(document).ready(function() {
        $.ajax({
            // API Link
            url: 'https://api.open-meteo.com/v1/forecast?latitude=41.0138&longitude=28.9497&current=temperature_2m,relative_humidity_2m,apparent_temperature,is_day,precipitation,rain,showers,snowfall&hourly=temperature_2m,relative_humidity_2m,dew_point_2m,apparent_temperature,precipitation_probability,precipitation,rain,showers,snowfall,snow_depth,weather_code,pressure_msl,surface_pressure,cloud_cover,cloud_cover_low,cloud_cover_mid,cloud_cover_high,visibility,evapotranspiration,et0_fao_evapotranspiration,vapour_pressure_deficit,wind_speed_10m,wind_speed_80m,wind_speed_120m,wind_speed_180m,wind_direction_10m,wind_direction_80m,wind_direction_120m,wind_direction_180m,wind_gusts_10m,temperature_80m,temperature_120m,temperature_180m,soil_temperature_0cm,soil_temperature_6cm,soil_temperature_18cm,soil_temperature_54cm,soil_moisture_0_to_1cm,soil_moisture_1_to_3cm,soil_moisture_3_to_9cm,soil_moisture_9_to_27cm,soil_moisture_27_to_81cm&daily=weather_code,temperature_2m_max,temperature_2m_min,apparent_temperature_max,apparent_temperature_min,sunrise,sunset',
            method: 'GET',
            success: function(response) {
                var currentTemperature = response.current.temperature_2m + '°C';
                $('#current-temperature').text(currentTemperature);
            },
            error: function() {
                $('#current-temperature').text('Hata oluştu');
            }
        });
        function updateClock() {
            var time = new Date();
            var hours = time.getHours().toString().padStart(2, '0');
            var minutes = time.getMinutes().toString().padStart(2, '0');
            var seconds = time.getSeconds().toString().padStart(2, '0');
            document.getElementById('time').innerText = `${hours}:${minutes}:${seconds}`;
            if (hours >= 0 && hours < 10) {
                document.getElementById('status').innerText = 'Pasif';
            } else {
                document.getElementById('status').innerText = 'Aktif';
            }
        }
        setInterval(updateClock, 1000);
    });