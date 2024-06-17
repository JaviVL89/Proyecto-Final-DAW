document.addEventListener("DOMContentLoaded", function () {
    const ctx = document.getElementById("myChart").getContext("2d");
    if (ctx) {
        console.log("Contexto de gráfico obtenido");
        const myChart = new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                    "Enero",
                    "Febrero",
                    "Marzo",
                    "Abril",
                    "Mayo",
                    "Junio",
                    "Julio",
                    "Agosto",
                    "Septiembre",
                    "Octubre",
                    "Noviembre",
                    "Diciembre",
                ],
                datasets: [
                    {
                        label: "Cursos Realizados",
                        data: [5, 10, 8, 6, 7],
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        borderColor: "rgba(75, 192, 192, 1)",
                        borderWidth: 1,
                    },
                    {
                        label: "Tiempo en la Página (horas)",
                        data: [2, 3, 4, 3, 5],
                        backgroundColor: "rgba(153, 102, 255, 0.2)",
                        borderColor: "rgba(153, 102, 255, 1)",
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Meses",
                        },
                        grid: {
                            display: true,
                            color: "#e0e0e0",
                        },
                        ticks: {
                            color: "#333",
                        },
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Cantidad",
                        },
                        grid: {
                            display: true,
                            color: "#e0e0e0",
                        },
                        ticks: {
                            color: "#333",
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: true,
                        position: "top",
                    },
                    tooltip: {
                        enabled: true,
                        mode: "index",
                        intersect: false,
                        callbacks: {
                            label: function (tooltipItem) {
                                return (
                                    tooltipItem.dataset.label +
                                    ": " +
                                    tooltipItem.raw
                                );
                            },
                        },
                    },
                },
            },
        });
    } else {
        console.error("Error al obtener el contexto del gráfico");
    }
});
