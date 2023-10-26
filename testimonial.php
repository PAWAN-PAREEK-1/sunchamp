<!-- <section class="testimonial">
    <div class="testi">
        <div class="testi1">
            <div class="testi-1">
                <div class="testi101">

                    <img src="img/play.svg" alt="" id="testibg">
                </div>
                <div class="testi102">
                    <h3>Our Testimonial</h3>
                    <h1>Our Materials will <span> build<br>
                        your Trust</span></h1>

                </div>
            </div>
            <div class="testi103">
                <div class="testicontact">
                    <div class="testicontact01">
                        <img src="img/testicall.svg" alt="">
                        <h3>Phone Number</h3>

                        <p> +1 123-456-7890</p>
                    </div>
                    <hr>
                    <div class="testicontact02">
                        <img src="img/testiemail.svg" alt="">
                        <h3>Email Address</h3>
                        <p>sales@example.com </p>
                    </div>
                </div>

            </div>


        </div>
        <div class="testi001">
            <div class="testi2">

                <h1>What Client Say</h1>
                <div class="rating">
                    <img src="img/tesiimg.svg" alt="">
                    <div class="rating0">
                        <h3>Talan Rhiel Madsen</h3>
                        <img src="img/ratinh.svg" alt="">
                    </div>
                </div>
                <p>Upon placing my order, I realized I had purchased more than required. Upon reaching out via email, I received a swift response. They efficiently corrected my order, processed a refund, and expedited the product shipment. Their prompt and responsive service truly stands out    </p>
                <div class="circles">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
                <script>const circles = document.querySelectorAll('.circle');
                    const reviews = [
                        {
                            name: 'Talan Rhiel Madsen',
                            image: 'img/tesiimg.svg',
                            text: 'Upon placing my order, I realized I had purchased more than required. Upon reaching out via email, I received a swift response. They efficiently corrected my order, processed a refund, and expedited the product shipment. Their prompt and responsive service truly stands out'
                        },
                        {
                            name: 'Talan Rhiel ',
                            image: 'img/testiemail.svg',
                            text: 'Upon placing my order, I realized I had purchased more than required. Upon reaching out via email, I received a swift response. They efficiently corrected my order, processed a refund, and expedited the product shipment. Their prompt and responsive service truly stands out'
                        },
                        {
                            name: 'Talan Madsen',
                            image: 'img/tesiimg.svg',
                            text: 'Upon placing my order, I realized I had purchased more than required. Upon reaching out via email, I received a swift response. They efficiently corrected my order, processed a refund, and expedited the product shipment. Their prompt and responsive service truly stands out'
                        },
                        {
                            name: 'Talan Rhiel Madsen',
                            image: 'img/tesiimg.svg',
                            text: 'Upon placing my order, I realized I had purchased more than required. Upon reaching out via email, I received a swift response. They efficiently corrected my order, processed a refund, and expedited the product shipment. Their prompt and responsive service truly stands out'
                        },
                        // ... add more reviews here
                    ];

                    circles.forEach((circle, index) => {
                        circle.addEventListener('click', () => {
                            circles.forEach(circle => circle.classList.remove('active'));
                            // add the active class to the clicked circle
                            circle.classList.add('active');
                            const review = reviews[index];
                            document.querySelector('.rating0 h3').textContent = review.name;
                            document.querySelector('.rating img').src = review.image;
                            document.querySelector('.testi2 p').textContent = review.text;
                        });
                    });

                </script>

            </div>

        </div>
    </div>
</section>


<!-- <section class="clipimg">
    <div class="img1">
        <img src="img/clip1.svg" alt="">
    </div>
    <div class="img2">
        <img src="img/clip3.svg" alt="">
    </div>
</section> --> -->