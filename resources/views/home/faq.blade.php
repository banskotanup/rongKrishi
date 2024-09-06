
<section class="faq-section py-3">
    <div class="container" style="margin-top: 80px;">

      <div class="w-lg-50 mx-auto">
        <h2 class="mb-5">Have a Questions</h2>
        <div class="accordion accordion-flush" id="accordionExample">

          <!-- 1: coll1 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <!--   data-bs-target="#coll1",  controls="coll1", id="coll1", aria-expanded="true"      -->
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#coll1" aria-expanded="true" aria-controls="coll1">
                <h5> What is Semantic HTML and how does it work?</h5>
              </button>
            </h2>
            <!-- show : by default Always open -->
            <div id="coll1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Semantic HTML refers to a method of coding where HTML markup is used to emphasise the meaning or semantics of the existing content.
              </div>
            </div>
          </div>

          <!-- 2: coll2 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <!--       collapsed,   aria-expanded="false"   -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll2" aria-expanded="false" aria-controls="coll2">
                <h5> What do you know about the Box Sizing property?</h5>
              </button>
            </h2>
            <div id="coll2" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                The Box Sizing property in CSS defines how developers should calculate the width and height of a box.

                Content Box is when the default height and width get applied to the content of an element. The border and padding lie outside the box.

                Padding Box is when the developer adds the dimensions to include the padding and content of the element. This adds a border outside the given box.

                Border Box is when the box dimensions apply to the border, padding and content.
              </div>
            </div>
          </div>

          <!-- 3: coll3 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll3" aria-expanded="false" aria-controls="coll3">
                <h5> Define the ways in which you can hide an element using CSS.</h5>
              </button>
            </h2>
            <div id="coll3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                There are three ways to hide elements with CSS.

                display:none can hide the content so that it doesn’t get stored in the DOM.

                visibility:hidden adds an element to the DOM and occupies space. However, the user cannot see it.

                position:absolute makes the element appear outside the screen, not on the screen.
              </div>
            </div>
          </div>

          <!-- 4: coll4 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <!--   target="#coll4",  id="coll4"  -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll4" aria-expanded="false" aria-controls="coll4">
                <h5> What does Callback mean in JavaScript?</h5>
              </button>
            </h2>
            <div id="coll4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Callback is a JavaScript function that developers send as a parameter or argument to other functions. You can call this function whenever the function it is provided to gets called.
              </div>
            </div>
          </div>

          <!-- 5: coll5 -->
          <div class="accordion-item">
            <h2 class="accordion-header">
              <!--   target="#coll5",  id="coll5"  -->
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#coll5" aria-expanded="false" aria-controls="coll5">
                <h5> Differences between Undefined, Undeclared and Null in JavaScript.</h5>
              </button>
            </h2>
            <div id="coll5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
              <div class="accordion-body">
                Undefined refers to a situation where a variable is declared but no value has been assigned to the variable yet.<br />
                ex.
                let a;
                console.log(a); // Output: undefined

                <br />

                Null refers to the assignment of value to a variable that isn’t meant to contain any value.<br />
                ex. let b = null;
                console.log(b); // Output: null
                <br />

                Undeclared refers to variables that don’t exist in an application or program or haven’t been declared. <br />
                ex.
                console.log(c); // ReferenceError: c is not defined

              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </section>