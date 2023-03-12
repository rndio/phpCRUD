const $_AWN = new AWN({
    position: "bottom-right",
    maxNotifications: 3,
    durations: { global: 5000 },
    icons: {
        enabled: true,
        prefix: "<i ",
        suffix: "</i>",
        tip: "class='ri-question-fill display-4' style='color:grey'>",
        info: "class='ri-information-fill display-4' style='color:#1c76a6'>",
        success: "class='ri-checkbox-circle-fill display-4'style='color:#40871D'>",
        warning: "class='ri-error-warning-fill display-4'style='color:#c26700'>",
        alert: "class='ri-alert-fill display-4' style='color:#a92019'>",
        async: "class='ri-settings-5-fill display-4 spin' style='color:grey'>",
        confirm: "class='ri-alert-fill display-4' style='color:#a92019'>"
    },
    messages: { ['async-block']: 'Please Wait' }
})

function debounce(fn, delay) {
    var timer = null;
    return function () {
        var context = this,
            args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
            fn.apply(context, args);
        }, delay);
    };
}