$("#formCep").validate({
    rules: {
        captureCep: {
            required: true,
            minlength: 1,
            maxlength: 9
        }
    },
    messages: {
        captureCep: {
            required: "Inform the CEP!",
            minlength: "Enter at least 1 value to start the search.",
            maxlength: "Maximum limit exceeded!"
        }
    }
});