<style>
    .custom-button {
        margin-top: 7%;
        color: white;
        border: 1px solid grey;
        background-color: transparent;
        cursor: pointer;
        transition: background-color 0.3s, color 0.3s;
    }

    .custom-button.clicked {
        background-color: grey;
        color: black;
    }
</style>

<div class="sector__main-content sector__main-content-reference" data-sector="engineering">

    <h3>Contact Us</h3>
    <h2>Connect with us for personalized solutions. Your success starts with a simple click.</h2>
    <br>
    <div>
    <a href="mailto:contact@axsweb3.com" class="landing__sector-link_new">
        <h2 style="margin-top: 7%;"><i class="fa-regular fa-envelope"></i> contact@axsweb3.com</h2>
    </a>


        <a href="http://www.calendly.com/mistermo" class="landing__sector-link_new">
            <h2 class="custom-button" onclick="handleClick()">Book a call</h2>
        </a>

    </div>

</div>


<!-- Companies UI engineering -->

<div class="navigation__companies hidden" data-companies-sector="engineering">

    <button class="navigation__companies-back-to-sector icon__hover-trigger" data-message="Back to sector"
        data-audio-play="button2">
        <p>Close</p>

        <svg class="icon icon__round icon__size-normal" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true">

            <circle class="icon__default-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
            <circle class="icon__second-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
            <circle class="icon__third-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
            <circle class="icon__background-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />

            <g class="icon__content">
                <path d="M17.6,16.6l5.8,5.8l-1,1l-5.8-5.8L17.6,16.6z" />
                <path d="M16.6,22.4l5.8-5.8l1,1l-5.8,5.8L16.6,22.4z" />
            </g>


            <g class="icon__content icon__content-shine">
                <path d="M17.6,16.6l5.8,5.8l-1,1l-5.8-5.8L17.6,16.6z" />
                <path d="M16.6,22.4l5.8-5.8l1,1l-5.8,5.8L16.6,22.4z" />
            </g>

            <g class="icon__content icon__content-shine-permanent">
                <path d="M17.6,16.6l5.8,5.8l-1,1l-5.8-5.8L17.6,16.6z" />
                <path d="M16.6,22.4l5.8-5.8l1,1l-5.8,5.8L16.6,22.4z" />
            </g>

        </svg>

    </button>

    <div class="navigation__companies-buttons">
        <div class="navigation__companies-item navigation__companies-left icon__hover-trigger"
            data-animation="arrow-icon" data-audio-play="button2">

            <svg class="icon icon__round icon__size-normal" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">

                <circle class="icon__default-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
                <circle class="icon__second-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
                <circle class="icon__third-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
                <circle class="icon__background-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />

                <g class="icon__content">
                    <g mask="url(#arrow-mask)">
                        <g class="arrow__animation-wrapper" direction="left">
                            <path vector-effect="non-scaling-stroke"
                                d="M15.5,20.1l3.4,3.4l0.8-0.9l-1.9-2h6.7v-1.2h-6.7l1.9-2.1l-0.8-0.9L15.5,20.1z" />
                            <path vector-effect="non-scaling-stroke"
                                d="M15.5,20.1l3.4,3.4l0.8-0.9l-1.9-2h6.7v-1.2h-6.7l1.9-2.1l-0.8-0.9L15.5,20.1z" />
                        </g>
                    </g>
                </g>


            </svg>

        </div>
        <div class="navigation__companies-item navigation__companies-right icon__hover-trigger"
            data-animation="arrow-icon" data-audio-play="button2">

            <svg class="icon icon__round icon__size-normal" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">

                <circle class="icon__default-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
                <circle class="icon__second-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
                <circle class="icon__third-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />
                <circle class="icon__background-circle" cx="20" cy="20" r="19.5" vector-effect="non-scaling-stroke" />

                <g class="icon__content">
                    <g mask="url(#arrow-mask)">
                        <g class="arrow__animation-wrapper" direction="right">
                            <path vector-effect="non-scaling-stroke"
                                d="M24.5,19.9l-3.4-3.4l-0.8,0.9l1.9,2h-6.7v1.2h6.7l-1.9,2.1l0.8,0.9L24.5,19.9z" />
                            <path vector-effect="non-scaling-stroke"
                                d="M24.5,19.9l-3.4-3.4l-0.8,0.9l1.9,2h-6.7v1.2h6.7l-1.9,2.1l0.8,0.9L24.5,19.9z" />
                        </g>
                    </g>
                </g>


            </svg>

        </div>
    </div>
</div>