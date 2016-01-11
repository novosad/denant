[[!FormIt?
&hooks=`email,redirect`
&emailTpl=`contactFormTpl`
&emailFrom=`from@domain.com`
&emailFromName=`Your Site Name`
&emailSubject=`Message From Your Site Name`
&emailTo=`email@domain.com`
&redirectTo=`36`
&validate=`name:required, email:email:required, comments:required:stripTags` ]]
<form id="contactForm" action="[[~[[*id]]]]" method="post">

    <label for="name">Your Name* [[!+fi.error.name]]</label>
    <input type="text" name="name" id="name" value="First and last name[[!+fi.name]]" class="required" autofocus="">
    <br/>

    <label for="email">Your Email* [[!+fi.error.email]]</label>
    <input type="email" name="email" id="email" value="example@domain.com[[!+fi.email]]" class="required">
    <br/>

    <label for="phone">Your Phone Number</label>
    <input type="tel" name="phone" id="phone" value="555-555-5555">
    <br/>

    <label for="budget">Project Budget</label>
    <input type="text" name="budget" id="budget" value="Ex. $5000 - $10k">
    <br/>

    <label for="comments">Questions or Comments* [[!+fi.error.comments]]</label>
    <textarea id="comments" name="comments" class="required" cols="" rows="">[[!+fi.comments]]</textarea>
    <button type="submit" id="submitBtn">Send</button>

</form>