<link rel="icon" type="image/x-icon" href="../assets/imagenes/favicon.png">

<script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
<script>
tailwind.config = {
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '1.5rem',
                lg: '3rem',
                xl: '4rem',
                '2xl': '6rem',
            },
        },
        extend: {
            animation: {
                'shake': 'shake 1s infinite',
            },
            keyframes: {
                shake: {
                    "0%": {
                        transform: "translate(1px, 1px) rotate(0deg)"
                    },
                    "10%": {
                        transform: "translate(-1px, -2px) rotate(-1deg)"
                    },
                    "20%": {
                        transform: "translate(-3px, 0px) rotate(1deg)"
                    },
                    "30%": {
                        transform: "translate(3px, 2px) rotate(0deg)"
                    },
                    "40%": {
                        transform: "translate(1px, -1px) rotate(1deg)"
                    },
                    "50%": {
                        transform: "translate(-1px, 2px) rotate(-1deg)"
                    },
                    "60%": {
                        transform: "translate(-3px, 1px) rotate(0deg)"
                    },
                    "70%": {
                        transform: "translate(3px, 1px) rotate(-1deg)"
                    },
                    "80%": {
                        transform: "translate(-1px, -1px) rotate(1deg)"
                    },
                    "90%": {
                        transform: "translate(1px, 2px) rotate(0deg)"
                    },
                    "100%": {
                        transform: "translate(1px, -2px) rotate(-1deg)"
                    },
                }
            }

        }
    }
}
</script>