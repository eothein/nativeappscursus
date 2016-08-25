
<?php

use app\assets\TocAsset;
use yii\helpers\Html;

TocAsset::register($this);
$this->title = 'Fragments and best practises';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Fragments and best practises</h1>

            <p>Before we go into some more concepts
                we will take a quick review of best practices learned from the lessons from
                last weeks.</p>
            <ul>
                <li>Use Fragments to represent a UI screen</li>
                <li>Use Activities just to manage Fragments</li>
                <li>Make use of usefull libraries to ease the programming (e.g. ButterKnife)</li>
                <li>Layout XMLs are code, organize them well</li>
                <li>Do not make a deep hierarchy of ViewGroups</li>
                <li>Use Genymotion as your emulator</li>
            </ul>
            <p>Furthermore, here are some more tricks you can use to improve you app
                quality</p>
            <h2>Final identifier</h2>
            <p>The “final” identifier is actually pretty important to both the ones reading the code
                and also the compiler, since it can just insert its value into the references. 
                That means, that whenever you declare an instance variable, think about if it is likely 
                to change or if you can declare it as final. Within methods, making use of the “final” 
                keyword does not really change much for the compiler, but it sometimes helps you make a 
                clearer design so you directly get a compiler warning whenever you're trying to change a 
                final variable's value.
                A side note on making “static” variables and fields – I wouldn't recommend that on Android unless you 
                know what you're doing or you're using it together with “final”. A “static final” instance variable 
                is the best way to declare constants in Android because the compiler can replace it fast and ART can 
                replace it during the install of your app! </p>
            <h2>Use StringBuilder for basic input/ output</h2>
            <p>Let's talk about something that is fundamental to Java – the String object. 
                Well it's not a real object since it is actually immutable. That means 
                a String can only be created or collected by the garbage collector, it 
                can't be changed (which is very important since object creation is god 
                damn expensive in Android so it would make our apps pretty slow)! Wait, 
                then what happens if I call one of the awesome methods in the String class 
                like substring() or replace()? And here comes the downside: These methods 
                have to create new Strings and the old one is collected by the garbage 
                collector. While this might be totally alright if you're just parsing 
                some basic user input, if you need to perform some heavy String operations 
                like many substrings, a whole lot of unused garbage and overhead is created. 
                This doesn't only mean that you are temporarily using a lot of memory, with 
                the garbage collector needed to kick in it also affects your performance.
                So how do we get around this problem? Luckily there is a Java class which can do almost 
                the same as the default String implementation, the StringBuilder. This class will hold a 
                char array with all the chars you had in your String. The class can take care of managing 
                that array like initializing it with a default length of 16 and creating a larger array once 
                you have more characters that would fit into it. Take a look at the constructors as well – with new StringBuilder(length) you can directly make that array as long as it needs to be and with new StringBuilder(string) the array is instantly filled with the string. The big advantage the StringBuilder is that it can modify the array instead of having to create new Strings every time. If you're finished with the heavy modifying, just call toString() to get the String back.</p>
            <h2>Avoid Creating Unnecessary Objects</h2>
            <p>Object creation is never free. A generational garbage collector with per-thread 
                allocation pools for temporary objects can make allocation cheaper, but allocating
                memory is always more expensive than not allocating memory.
                As you allocate more objects in your app, you will force a periodic garbage collection, 
                creating little "hiccups" in the user experience. The concurrent garbage collector introduced 
                in Android 2.3 helps, but unnecessary work should always be avoided.
                Thus, you should avoid creating object instances you don't need to. </p>
            <h2>Avoid Internal Getters/Setters</h2>
            <p>This is a bad idea on Android. Virtual method calls are expensive, much more so 
                than instance field lookups. It's reasonable to follow common object-oriented 
                programming practices and have getters and setters in the public interface, 
                but within a class you should always access fields directly.
                Without a JIT, direct field access is about 3x faster than invoking a trivial getter. 
                With the JIT (where direct field access is as cheap as accessing a local), direct 
                field access is about 7x faster than invoking a trivial getter.</p>
            <h2>Use the Enchanced loop</h2>
            <p>The enhanced for loop (also sometimes known as "for-each" loop) can be used for collections 
                that implement the Iterable interface and for arrays. With collections, an iterator is 
                allocated to make interface calls to hasNext() and next(). With an ArrayList,
                a hand-written counted loop is about 3x faster (with or without JIT), but for 
                other collections the enhanced for loop syntax will be exactly equivalent to 
                explicit iterator usage.</p>
            <h2>Avoid Floating point where necessary</h2>
            <p>As a rule of thumb, floating-point is about 2x slower than integer on Android-powered devices.
                In speed terms, there's no difference between float and double on the more modern hardware. 
                Space-wise, double is 2x larger. As with desktop machines, assuming space isn't an issue, 
                you should prefer double to float. Also, even for integers, some processors have hardware 
                multiply but lack hardware divide. In such cases, integer division and modulus operations 
                are performed in software—something to think about if you're designing a hash table or 
                doing lots of math.</p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Fragments as a user interface</h2>
                <p>In the previous lesson we covered the fundamentals of Fragments.
                    You can find the  code examples and best-practices regarding fragments
                    <a href="http://developer.android.com/guide/components/fragments.html">here</a>
                </p>
            </div>
        </div>
    </div>

</article>