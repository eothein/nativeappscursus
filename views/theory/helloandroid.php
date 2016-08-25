<?php

use app\assets\TocAsset;
use yii\helpers\Html;
use newerton\fancybox\FancyBox;

TocAsset::register($this);
$this->title = 'Hello Androids';
$this->params['breadcrumbs'][] = $this->title;
?>

<article>
    <div class="row">
        <div class="col-sm-12">
            <h1>Hello Android</h1>
            <p>Android is an open-source software stack that includes the operating system,
                middleware and key mobile applications along with a set of API libraries
                for writing applicatons that can shape the look, feel and function of the devices
                on which they run. This lesson will explain the necessary components you
                need to know before you dive into programming native Android applications. </p>
        </div>
    </div>
    <div class="all-sections">
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-one">Android: an open platform for mobile development</h2>
                <p>
                    When some people hear of android, they think of the metal
                    robots from comic books and movies. However, this course
                    will not cover robotics (at least not in this stage) but the mobile platform
                    used by a lot of mobile devices. It is difficult to give a concrete
                    number for the usage statistics for android devices, as they differ from source to
                    source. But it is fair to say that a lot of mobile devices use it.

                </p>
            </div>
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Excercise</h3>
                    </div>
                    <div class="panel-body">
                        Look around in your class room and count which
                        class mate uses which operating system.
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <p>
                    Android has expanded beyond a pure mobile phone plaform to provide a
                    development platform for an increasingly wide range of hardeware including
                    tablets and even televisions.
                </p>

                <p>
                    Put simply, Android is an ecosystem made up of a combination of three components
                </p>
                <ol>
                    <li>A free, open soure operating system for embedded devices</li>
                    <li> An open-source develoment platform for creating applications</li>
                    <li>Devices, particularly mobile devices, that run the Android operating
                        system and the applications created for it. </li>
                </ol>
            </div>
            <div class="col-sm-12">
                <div class="alert alert-info" role="alert"> The term open source refers to software that has often been developed collaboratively by
                    an open community of individuals, is freely available for commercial use, and comes with all of
                    the source code so that it can be further modified if necessary. Android is open source, though
                    Google develops it internally before releasing the source code; from that point on, it is freely
                    available for commercial use.</div>
            </div>
            <p>
                More specifically, Android is made up of several necessary and dependent parts, including
                (but not limited to) the following:          </p>
            <ul>
                <li>A <b>Linux operating</b> system kernel that provides a low-level interface with the hardware, memory
                    management, and process control, all optimized for mobile and embedded devices.</li>
                <li><b>Open-source libraries</b> for application development, including SQLite, WebKit, OpenGL, and
                    a media manager.</li>
                <li>A <b>run time</b> used to execute and host Android applications, including the Dalvik Virtual
                    Machine (VM) and the core libraries that provide Android-specific functionality. The run
                    time is designed to be small and efficient for use on mobile devices.</li>
                <li>An <b>application framework</b> that agnostically exposes system services to the application layer,
                    including the window manager and location manager, databases, telephony, and sensors.</li>
            </ul>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <h3> Android Versions </h3>
                <p>
                    The basic building blocks of Android come in many flavors, with each major release receiving a tasty nickname.
                    This section is an extract of <a href="http://www.androidcentral.com/android-versions"> this article </a> and
                    will guide you trough the different Android versions over the years. </p>
            </div>
            <div class="col-sm-12">
                <?php
                echo newerton\fancybox\FancyBox::widget([
                    'target' => 'a[rel=fancybox]',
                    'helpers' => true,
                    'mouse' => true,
                    'config' => [
                        'maxWidth' => '90%',
                        'maxHeight' => '90%',
                        'playSpeed' => 7000,
                        'padding' => 0,
                        'fitToView' => false,
                        'width' => '70%',
                        'height' => '70%',
                        'autoSize' => false,
                        'closeClick' => false,
                        'openEffect' => 'elastic',
                        'closeEffect' => 'elastic',
                        'prevEffect' => 'elastic',
                        'nextEffect' => 'elastic',
                        'closeBtn' => false,
                        'openOpacity' => true,
                        'helpers' => [
                            'title' => ['type' => 'float'],
                            'buttons' => [],
                            'thumbs' => ['width' => 68, 'height' => 50],
                            'overlay' => [
                                'locked' => false,
                                'css' => [
                                    'background' => 'rgba(0, 0, 0, 0.8)'
                                ]
                            ]
                        ],
                    ]
                ]);

                echo Html::a(Html::img('@web/images/android-versions.jpg', ['alt' => 'Android versions', 'width' => '100%', 'class' => "img-responsive"]), '/images/android-versions.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h4>Froyo, Eclair & Cupcake</h4>
                <p>
                    Versions of Android older than 2.3, while still used on very a small number of devices,
                    are considered "legacy" versions and are generally unsupported by Google, manufacturers and app developers.</p>
                <ul>
                    <li>Just-In-Time Compiler </li>
                    <li>Support for Adobe Flash 10.1 </li>
                    <li>Support for tethering</li>
                </ul>

                <h4>Gingerbread</h4>
                </p>
                <ul>
                    <li>UI enhancements </li>
                    <li>New language support. </li>
                    <li>Support for NFC (Near Field Communication)</li>
                </ul>

                <h4>Honeycomb </h4>
                <p>
                    Honeycomb is  the first (and only) version of Android specifically made for tablets, and it brought a lot of new UI elements to the table(t).
                    It also introduced Google's new distribution method, where manufacturers are given the source code and license to use it only
                    after their hardware choices have been approved by Google. </p>
                <ul>
                    <li>Update for Google applications</li>
                    <li>Use of fragments </li>
                    <li>Support for NFC (Near Field Communication)</li>
                </ul>

                <h4>Ice Cream Sandwich  </h4>
                <p>
                    Ice Cream Sandwich brought many of the design elements of Honeycomb to smartphones, while refining the Honeycomb experience
                </p>

                <h4>Jelly Bean </h4>
                <p>
                    This release polished the UI design started in Ice Cream Sandwich </p>
                <ul>
                    <li>Multi-user accounts</li>
                    <li>Focus on responsiveness</li>
                    <li>Actionable notifications</li>
                    <li>...</li>
                </ul>

                <h4>KitKat </h4>
                <p>
                    <a href="http://www.androidcentral.com/android-kitkat-44-confectionary-perfectionary">KitKat</a> brought a lighter, flatter and far more colorful look to Android, but many more changes
                    were under the hood. These were the foundation for things like the Google Now launcher,
                    SMS integration with Hangouts, and easier and faster use all around.  </p>

                <h4>Lollipop </h4>
                <p>
                    Google released Android 5.0 Lollipop with the Nexus 6 and Nexus 9, and it ushered in a new design
                    language and support for 64-bit devices. It's also the first time Google has provided developer
                    beta previews of the software, so that the apps we all love can be ready when the new version drops.</p>

                <p>There were big changes under the hood as well, and a plethora of new API changes in addition to
                    forward-facing features like a new interface. Google has updated its own Nexus 5, Nexus 4 and
                    Nexus 7 to Lollipop, and other companies like Motorola, Samsung, HTC and LG have been relatively quick to follow. </p>


                <h4>Marshmallow</h4>
                <p>
                    Android 6.0 gets better control over permissions, allowing you to control what parts of your data apps can access,
                    rather than approve it by simply installing the app in the first place. That's just the beginning, and features
                    like app linking and the new Assist API will allow developers to build better and more powerful apps.
                </p>
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h2 id="section-two">The Android software stack</h2>


                <p>The Android software stack is a Linux kernel and a collection of C/C++ libraries
                    exposed through an application framework that provides services for, and management of, the run
                    time and applications. It consists of </p>
                <ul>
                    <li><b>Linux kernel</b> — Core services (including hardware drivers, process and memory management,
                        security, network, and power management) are handled by a Linux 2.6 kernel. The kernel
                        also provides an abstraction layer between the hardware and the remainder of the stack. </li>
                    <li><b>Libraries</b> — Running on top of the kernel, Android includes various C/C++ core libraries
                        such as libc and SSL</li>
                    <li><b>Android run time</b> — The run time is what makes an Android phone an Android phone rather
                        than a mobile Linux implementation. Including the core libraries and the Dalvik VM, the
                        Android run time is the engine that powers your applications and, along with the libraries,
                        forms the basis for the application framework.</li>
                    <li><b>Core libraries</b> — Although most Android application development is written using
                        the Java language, Dalvik is not a Java VM. The core Android libraries provide
                        most of the functionality available in the core Java libraries, as well as the Androidspecific
                        libraries.</li>
                    <li><b>Dalvik VM</b> — Dalvik is a register-based Virtual Machine that’s been optimized to
                        ensure that a device can run multiple instances efficiently. It relies on the Linux kernel
                        for threading and low-level memory management.</li>
                    <li><b>Application framework </b> — The application framework provides the classes used to create
                        Android applications. It also provides a generic abstraction for hardware access and manages
                        the user interface and application resources.</li>
                    <li><b>Application layer </b> — All applications, both native and third-party, are built on the application
                        layer by means of the same API libraries. The application layer runs within the Android run
                        time, using the classes and services made available from the application framework.</li>

                </ul>
            </div>
            <div class="col-sm-6">

                <?php
                echo newerton\fancybox\FancyBox::widget([
                    'target' => 'a[rel=fancybox]',
                    'helpers' => true,
                    'mouse' => true,
                    'config' => [
                        'maxWidth' => '90%',
                        'maxHeight' => '90%',
                        'playSpeed' => 7000,
                        'padding' => 0,
                        'fitToView' => false,
                        'width' => '70%',
                        'height' => '70%',
                        'autoSize' => false,
                        'closeClick' => false,
                        'openEffect' => 'elastic',
                        'closeEffect' => 'elastic',
                        'prevEffect' => 'elastic',
                        'nextEffect' => 'elastic',
                        'closeBtn' => false,
                        'openOpacity' => true,
                        'helpers' => [
                            'title' => ['type' => 'float'],
                            'buttons' => [],
                            'thumbs' => ['width' => 68, 'height' => 50],
                            'overlay' => [
                                'locked' => false,
                                'css' => [
                                    'background' => 'rgba(0, 0, 0, 0.8)'
                                ]
                            ]
                        ],
                    ]
                ]);

                echo Html::a(Html::img('@web/images/hello/androidstack.jpg', ['alt' => 'Android versions',
                            'width' => '100%',
                            'class' => "img-responsive"]), '@web/images/hello/androidstack.jpg', ['rel' => 'fancybox']);
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="section-three">The virtual machine</h2>
                <h3>The Dalvik Virtual Machine</h3>
                <p>Android apps are deployed in Dalvik bytecode, which is portable, unlike native code. In order to be able to run the app
                    on a device, the code has to be compiled to machine code. Dalvik is based on JIT (just in time) compilation. This means that
                    each time you run an app, the part of the code required for its execution is going to be translated (compiled)
                    to machine code at that moment. As you progress through the app, additional code is going to be compiled and cached,
                    so that the system can reuse the code while the app is running. Since JIT compiles only a part of the code,
                    it has a smaller memory footprint and uses less physical space on the device. </p>

                <p>In the android release, Android 5.0 "Lollipop", Dalvik was entirely replaced by ART.</p>

                <h3>Android runtime (ART) </h3>
                <p> ART compiles the intermediate language, Dalvik bytecode, into a system-dependent binary.
                    The whole code of the app will be pre-compiled during install (once), thus removing the lag
                    that we see when we open an app on our device. With no need for JIT compilation, the code should execute much faster.</p>

                <p>Except for the potential speed increase, the use of ART can provide an important secondary benefit.
                    As ART runs app machine code directly (native execution), it doesn't hit the CPU as hard as just-in-time code
                    compiling on Dalvik. Less CPU usage results in less battery drain, which is a big plus for portable devices in general. </p>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="sections-five">Android development tools</h2>
                <p>Because Android applications run within the Dalvik VM, you can write them on any platform that
                    supports the developer tools.</p>
                <p>
                    We will work with the Android SDK using the Android studio IDE which is built on IntelliJ IDEA Community Edition,
                    the popular Java IDE by JetBrains. Information on installing the SDK and the IDE can be found
                    <a href="http://developer.android.com/sdk/installing/index.html">here</a>.
                </p>
                <p>
                    By default, the Android SDK does not include everything you need to start developing.
                    The SDK separates tools, platforms, and other components into packages you can download
                    as needed using the Android SDK Manager. So before you can start, there are a few packages
                    you should add to your Android SDK. Follow the steps explained
                    <a href="http://developer.android.com/sdk/installing/adding-packages.html">here</a>.
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="sections-six"> Android Virtual devices </h2>
                <p>
                    To simplify programming and debugging we will make use of an emulator: a program that pretends to be another
                    particular device or program (here an android device) that other components expect to interact with.
                    An Android Virtual Device (AVD) is a device configuration that is run with the Android emulator.
                    It works with the emulator to provide a virtual device-specific environment in which to install and run Android apps.</p>
                <p>
                    The Android SDK provides the AVD Manager tool for creating and otherwise managing AVDs. You can run this tool directly
                    or run SDK Manager and select Manage AVDs from the Tools menu. Before you start coding, make sure you have an AVD ready
                    to test your project on.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">Information while programming</div>
                    <div class="panel-body">Start you AVD before you start coding. It takes some time for the emulator to start, which
                        can take precious time while you are waiting idle. </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="sections-seven"> Genymotion </h2>
                <p>Genymotion is an Android emulator for building and testing Android apps. It’s fast, simple and powerful. This can be used
                    as an alternative for the native AVD (and in most cases works faster). For more information and installation, click
                    <a href="https://www.genymotion.com/">here</a></p>

                <h2 id="sections-eight"> Test on your own device </h2>

                <p>You can bypass emulators and test apps on a phone or tablet. To do so, you have to prepare the device,
                    prepare the development computer, and then hook the two together. To do so, follow the steps explained
                    <a href="http://developer.android.com/tools/device.html">here</a>.

                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h2 id="sections-last">Resources</h2>
                <ul>
                    <li> <a href="http://www.wrox.com/WileyCDA/WroxTitle/Professional-Android-4-Application-Development.productCd-1118102274.html">Android 4 Application development </a></li>
                    <li> <a href="https://developer.android.com/sdk/index.html">Android Studio </a></li>
                    <li> <a href="http://www.androidcentral.com/android-versions">Full article Android versioning </a></li>
                    <li> <a href="https://infinum.co/the-capsized-eight/articles/art-vs-dalvik-introducing-the-new-android-runtime-in-kit-kat">ART and Dalvik</a>
                    <li> <a href="https://www.genymotion.com/">Genymoton</a>
                </ul>
            </div>
        </div>
    </div>
</article>
