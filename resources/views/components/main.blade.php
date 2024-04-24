<div class="main">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                <div class="first-div">
                    <h1 id="heading">Say Hello to <span class="color-heading">ABCD</span></h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem aspernatur voluptate consectetur voluptates nihil eveniet sequi 
                        dignissimos quia reiciendis distinctio corporis sapiente laborum deserunt, est, dolore eligendi perspiciatis possimus. Recusandae.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Voluptatem aspernatur voluptate consectetur voluptates nihil eveniet sequi 
                        dignissimos quia reiciendis distinctio corporis sapiente laborum deserunt, est, dolore eligendi perspiciatis possimus. Recusandae.
                    </p>
                    <button class="btn btn-outline-success hire" type="submit">Hire</button>
                    <div class="datas">
                        <x-data :count="'100M'" :type="'Youtube Views'" />
                        <x-data :count="'5M'" :type="'Subscribers'"/>
                        <x-data :count="'8M'" :type="'Followers'"/>
                    </div>

                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
                <div class="second-div">
                    <img src="{{ asset('images/photo.png') }}" alt="Bg-Image">
                </div>
            </div>
        </div>
    </div>  