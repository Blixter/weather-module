<?php
namespace Blixter\Mock;

class WeatherMock
{
    /**
     * Function that takes an coordinate and gets upcomming weather.
     *
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     * @return array $result
     */
    public function getWeatherUpcoming(): array
    {
        $json = '
        {
            "latitude": 59.6749712,
            "longitude": 14.5208584,
            "timezone": "Europe/Stockholm",
            "daily": {
              "summary": "Blandad nederbörd på tisdag fram till nästa lördag.",
              "icon": "sleet",
              "data": [
                {
                  "time": 1575068400,
                  "summary": "Klart under dagen.",
                  "icon": "clear-day",
                  "sunriseTime": 1575099180,
                  "sunsetTime": 1575123060,
                  "moonPhase": 0.14,
                  "precipIntensity": 0.0024,
                  "precipIntensityMax": 0.0087,
                  "precipIntensityMaxTime": 1575127380,
                  "precipProbability": 0.05,
                  "precipType": "snow",
                  "precipAccumulation": 0.1,
                  "temperatureHigh": -0.18,
                  "temperatureHighTime": 1575111600,
                  "temperatureLow": -6.13,
                  "temperatureLowTime": 1575153480,
                  "apparentTemperatureHigh": -5.19,
                  "apparentTemperatureHighTime": 1575111660,
                  "apparentTemperatureLow": -9.73,
                  "apparentTemperatureLowTime": 1575158880,
                  "dewPoint": -7.48,
                  "humidity": 0.74,
                  "pressure": 1012.8,
                  "windSpeed": 3.3,
                  "windGust": 14.42,
                  "windGustTime": 1575071880,
                  "windBearing": 305,
                  "cloudCover": 0.13,
                  "uvIndex": 0,
                  "uvIndexTime": 1575111180,
                  "visibility": 16.093,
                  "ozone": 258.7,
                  "temperatureMin": -6.13,
                  "temperatureMinTime": 1575153480,
                  "temperatureMax": -0.18,
                  "temperatureMaxTime": 1575111600,
                  "apparentTemperatureMin": -9.52,
                  "apparentTemperatureMinTime": 1575154800,
                  "apparentTemperatureMax": -5.19,
                  "apparentTemperatureMaxTime": 1575111660
                },
                {
                  "time": 1575154800,
                  "summary": "Molnigt under dagen.",
                  "icon": "partly-cloudy-day",
                  "sunriseTime": 1575185700,
                  "sunsetTime": 1575209340,
                  "moonPhase": 0.18,
                  "precipIntensity": 0.0015,
                  "precipIntensityMax": 0.0072,
                  "precipIntensityMaxTime": 1575212400,
                  "precipProbability": 0.06,
                  "precipType": "snow",
                  "precipAccumulation": 0.1,
                  "temperatureHigh": -2.87,
                  "temperatureHighTime": 1575201600,
                  "temperatureLow": -6.74,
                  "temperatureLowTime": 1575267060,
                  "apparentTemperatureHigh": -6.34,
                  "apparentTemperatureHighTime": 1575201180,
                  "apparentTemperatureLow": -10.67,
                  "apparentTemperatureLowTime": 1575266520,
                  "dewPoint": -7.76,
                  "humidity": 0.82,
                  "pressure": 1013.2,
                  "windSpeed": 2.01,
                  "windGust": 9.88,
                  "windGustTime": 1575168660,
                  "windBearing": 258,
                  "cloudCover": 0.57,
                  "uvIndex": 0,
                  "uvIndexTime": 1575197640,
                  "visibility": 16.093,
                  "ozone": 244.6,
                  "temperatureMin": -6.4,
                  "temperatureMinTime": 1575233100,
                  "temperatureMax": -2.87,
                  "temperatureMaxTime": 1575201600,
                  "apparentTemperatureMin": -9.73,
                  "apparentTemperatureMinTime": 1575158880,
                  "apparentTemperatureMax": -6.34,
                  "apparentTemperatureMaxTime": 1575201180
                },
                {
                  "time": 1575241200,
                  "summary": "Lätt molnighet under dagen.",
                  "icon": "partly-cloudy-day",
                  "sunriseTime": 1575272220,
                  "sunsetTime": 1575295680,
                  "moonPhase": 0.21,
                  "precipIntensity": 0.004,
                  "precipIntensityMax": 0.0095,
                  "precipIntensityMaxTime": 1575280200,
                  "precipProbability": 0.13,
                  "precipType": "snow",
                  "precipAccumulation": 0.1,
                  "temperatureHigh": -2.19,
                  "temperatureHighTime": 1575288120,
                  "temperatureLow": -7.12,
                  "temperatureLowTime": 1575340800,
                  "apparentTemperatureHigh": -6.78,
                  "apparentTemperatureHighTime": 1575288000,
                  "apparentTemperatureLow": -10.89,
                  "apparentTemperatureLowTime": 1575348780,
                  "dewPoint": -8.46,
                  "humidity": 0.78,
                  "pressure": 1016,
                  "windSpeed": 2.55,
                  "windGust": 11.87,
                  "windGustTime": 1575289800,
                  "windBearing": 318,
                  "cloudCover": 0.3,
                  "uvIndex": 0,
                  "uvIndexTime": 1575284040,
                  "visibility": 16.093,
                  "ozone": 257.2,
                  "temperatureMin": -6.74,
                  "temperatureMinTime": 1575267060,
                  "temperatureMax": -2.19,
                  "temperatureMaxTime": 1575288120,
                  "apparentTemperatureMin": -10.67,
                  "apparentTemperatureMinTime": 1575266520,
                  "apparentTemperatureMax": -6.78,
                  "apparentTemperatureMaxTime": 1575288000
                },
                {
                  "time": 1575327600,
                  "summary": "Möjligtvis lite duggregn under kvällen.",
                  "icon": "snow",
                  "sunriseTime": 1575358740,
                  "sunsetTime": 1575382020,
                  "moonPhase": 0.24,
                  "precipIntensity": 0.0661,
                  "precipIntensityMax": 0.2588,
                  "precipIntensityMaxTime": 1575374400,
                  "precipProbability": 0.42,
                  "precipType": "snow",
                  "precipAccumulation": 0.6,
                  "temperatureHigh": 3.98,
                  "temperatureHighTime": 1575395520,
                  "temperatureLow": -1.5,
                  "temperatureLowTime": 1575442800,
                  "apparentTemperatureHigh": 0.14,
                  "apparentTemperatureHighTime": 1575396000,
                  "apparentTemperatureLow": -3.3,
                  "apparentTemperatureLowTime": 1575442800,
                  "dewPoint": -3.09,
                  "humidity": 0.91,
                  "pressure": 1014.4,
                  "windSpeed": 3.25,
                  "windGust": 12.2,
                  "windGustTime": 1575395160,
                  "windBearing": 250,
                  "cloudCover": 0.77,
                  "uvIndex": 0,
                  "uvIndexTime": 1575370500,
                  "visibility": 16.086,
                  "ozone": 218.8,
                  "temperatureMin": -7.12,
                  "temperatureMinTime": 1575340800,
                  "temperatureMax": 3.98,
                  "temperatureMaxTime": 1575395520,
                  "apparentTemperatureMin": -10.89,
                  "apparentTemperatureMinTime": 1575348780,
                  "apparentTemperatureMax": 0.14,
                  "apparentTemperatureMaxTime": 1575396300
                },
                {
                  "time": 1575414000,
                  "summary": "Hård vind under kvällen och över natten.",
                  "icon": "wind",
                  "sunriseTime": 1575445260,
                  "sunsetTime": 1575468360,
                  "moonPhase": 0.27,
                  "precipIntensity": 0.0031,
                  "precipIntensityMax": 0.0174,
                  "precipIntensityMaxTime": 1575482400,
                  "precipProbability": 0.04,
                  "precipType": "rain",
                  "temperatureHigh": 4.35,
                  "temperatureHighTime": 1575482400,
                  "temperatureLow": 2.78,
                  "temperatureLowTime": 1575526620,
                  "apparentTemperatureHigh": 0.15,
                  "apparentTemperatureHighTime": 1575482400,
                  "apparentTemperatureLow": -1.89,
                  "apparentTemperatureLowTime": 1575526740,
                  "dewPoint": 1.19,
                  "humidity": 0.97,
                  "pressure": 1008.9,
                  "windSpeed": 3.14,
                  "windGust": 18.31,
                  "windGustTime": 1575493800,
                  "windBearing": 233,
                  "cloudCover": 0.52,
                  "uvIndex": 0,
                  "uvIndexTime": 1575456840,
                  "visibility": 16.093,
                  "ozone": 203.3,
                  "temperatureMin": -1.5,
                  "temperatureMinTime": 1575443220,
                  "temperatureMax": 5.47,
                  "temperatureMaxTime": 1575497940,
                  "apparentTemperatureMin": -3.33,
                  "apparentTemperatureMinTime": 1575448920,
                  "apparentTemperatureMax": 0.94,
                  "apparentTemperatureMaxTime": 1575496980
                },
                {
                  "time": 1575500400,
                  "summary": "Regnskurar under kvällen och över natten.",
                  "icon": "rain",
                  "sunriseTime": 1575531780,
                  "sunsetTime": 1575554700,
                  "moonPhase": 0.3,
                  "precipIntensity": 0.0699,
                  "precipIntensityMax": 0.2488,
                  "precipIntensityMaxTime": 1575579660,
                  "precipProbability": 0.62,
                  "precipType": "rain",
                  "temperatureHigh": 4.58,
                  "temperatureHighTime": 1575568800,
                  "temperatureLow": 4.03,
                  "temperatureLowTime": 1575568800,
                  "apparentTemperatureHigh": -0.54,
                  "apparentTemperatureHighTime": 1575561120,
                  "apparentTemperatureLow": -0.66,
                  "apparentTemperatureLowTime": 1575568800,
                  "dewPoint": 3.29,
                  "humidity": 0.94,
                  "pressure": 1001.3,
                  "windSpeed": 7.09,
                  "windGust": 17.64,
                  "windGustTime": 1575579900,
                  "windBearing": 232,
                  "cloudCover": 0.72,
                  "uvIndex": 0,
                  "uvIndexTime": 1575543300,
                  "visibility": 16.093,
                  "ozone": 239.5,
                  "temperatureMin": 2.78,
                  "temperatureMinTime": 1575526620,
                  "temperatureMax": 5.85,
                  "temperatureMaxTime": 1575586800,
                  "apparentTemperatureMin": -1.89,
                  "apparentTemperatureMinTime": 1575526740,
                  "apparentTemperatureMax": 1.11,
                  "apparentTemperatureMaxTime": 1575586800
                },
                {
                  "time": 1575586800,
                  "summary": "Regnskurar fram till på morgonen, som startar igen under kvällen.",
                  "icon": "rain",
                  "sunriseTime": 1575618300,
                  "sunsetTime": 1575641040,
                  "moonPhase": 0.33,
                  "precipIntensity": 0.3967,
                  "precipIntensityMax": 0.6109,
                  "precipIntensityMaxTime": 1575612420,
                  "precipProbability": 0.91,
                  "precipType": "rain",
                  "temperatureHigh": 8.77,
                  "temperatureHighTime": 1575633360,
                  "temperatureLow": 3.69,
                  "temperatureLowTime": 1575702000,
                  "apparentTemperatureHigh": 5.07,
                  "apparentTemperatureHighTime": 1575633660,
                  "apparentTemperatureLow": 0.27,
                  "apparentTemperatureLowTime": 1575700080,
                  "dewPoint": 5.35,
                  "humidity": 0.92,
                  "pressure": 984.6,
                  "windSpeed": 6.72,
                  "windGust": 19.11,
                  "windGustTime": 1575611700,
                  "windBearing": 224,
                  "cloudCover": 0.74,
                  "uvIndex": 0,
                  "uvIndexTime": 1575629760,
                  "visibility": 16.05,
                  "ozone": 252.3,
                  "temperatureMin": 5.3,
                  "temperatureMinTime": 1575586800,
                  "temperatureMax": 8.77,
                  "temperatureMaxTime": 1575633360,
                  "apparentTemperatureMin": 1.11,
                  "apparentTemperatureMinTime": 1575586800,
                  "apparentTemperatureMax": 5.07,
                  "apparentTemperatureMaxTime": 1575633660
                },
                {
                  "time": 1575673200,
                  "summary": "Möjligtvis lätta regnskurar på morgonen.",
                  "icon": "rain",
                  "sunriseTime": 1575704760,
                  "sunsetTime": 1575727380,
                  "moonPhase": 0.36,
                  "precipIntensity": 0.3335,
                  "precipIntensityMax": 1.4034,
                  "precipIntensityMaxTime": 1575698220,
                  "precipProbability": 0.75,
                  "precipType": "rain",
                  "temperatureHigh": 4.35,
                  "temperatureHighTime": 1575698400,
                  "temperatureLow": -1.31,
                  "temperatureLowTime": 1575781620,
                  "apparentTemperatureHigh": 0.51,
                  "apparentTemperatureHighTime": 1575707400,
                  "apparentTemperatureLow": -6.08,
                  "apparentTemperatureLowTime": 1575778860,
                  "dewPoint": 2.53,
                  "humidity": 0.96,
                  "pressure": 978.6,
                  "windSpeed": 4.46,
                  "windGust": 16.18,
                  "windGustTime": 1575759600,
                  "windBearing": 233,
                  "cloudCover": 0.93,
                  "uvIndex": 0,
                  "uvIndexTime": 1575716160,
                  "visibility": 12.813,
                  "ozone": 298.7,
                  "temperatureMin": 0.31,
                  "temperatureMinTime": 1575759600,
                  "temperatureMax": 6.64,
                  "temperatureMaxTime": 1575673200,
                  "apparentTemperatureMin": -4.45,
                  "apparentTemperatureMinTime": 1575759600,
                  "apparentTemperatureMax": 2.62,
                  "apparentTemperatureMaxTime": 1575673200
                }
              ]
            },
            "offset": 1
          }
          ';

        // $data = json_decode($json);

        return [$json];
    }
    /**
     * Function that takes an coordinate and get past 30 days weather
     *
     *
     * @return array $result
     */
    public function getWeatherPast(): array
    {
        $json = '
        {
            "latitude": 59.6749712,
            "longitude": 14.5208584,
            "timezone": "Europe/Stockholm",
            "daily": {
              "data": [
                {
                  "time": 1572562800,
                  "summary": "Mulet under dagen.",
                  "icon": "partly-cloudy-day",
                  "sunriseTime": 1572589380,
                  "sunsetTime": 1572621000,
                  "moonPhase": 0.17,
                  "precipIntensity": 0.0116,
                  "precipIntensityMax": 0.0695,
                  "precipIntensityMaxTime": 1572616440,
                  "precipProbability": 0.24,
                  "precipType": "snow",
                  "precipAccumulation": 0,
                  "temperatureHigh": 5.07,
                  "temperatureHighTime": 1572605760,
                  "temperatureLow": 0.34,
                  "temperatureLowTime": 1572670560,
                  "apparentTemperatureHigh": 2.65,
                  "apparentTemperatureHighTime": 1572605520,
                  "apparentTemperatureLow": -1.2,
                  "apparentTemperatureLowTime": 1572670740,
                  "dewPoint": 0.54,
                  "humidity": 0.89,
                  "pressure": 1012.9,
                  "windSpeed": 1.73,
                  "windGust": 8.12,
                  "windGustTime": 1572605280,
                  "windBearing": 186,
                  "cloudCover": 0.87,
                  "uvIndex": 1,
                  "uvIndexTime": 1572605220,
                  "visibility": 16.093,
                  "ozone": 285.7,
                  "temperatureMin": -0.88,
                  "temperatureMinTime": 1572580500,
                  "temperatureMax": 5.07,
                  "temperatureMaxTime": 1572605760,
                  "apparentTemperatureMin": -0.61,
                  "apparentTemperatureMinTime": 1572580500,
                  "apparentTemperatureMax": 2.65,
                  "apparentTemperatureMaxTime": 1572605520
                }
              ]
            },
            "offset": 1
          }
          ';
        // $data = json_decode($json);

        return [$json];
    }
}
