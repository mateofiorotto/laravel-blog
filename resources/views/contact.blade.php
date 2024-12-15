<x-blog-layout meta-title='Contact' meta-description='You want recommendations? Contact us!'>
    <section class="mx-auto mt-4 max-w-6xl">
        <h2
          class="mt-4 mb-8 text-center font-serif text-4xl font-extrabold text-sky-600 md:text-5xl"
        >
          Contact Us
        </h2>
        <div
          class="mx-auto max-w-xl rounded-lg bg-white p-10 shadow-lg dark:bg-slate-900 md:p-14"
        >
          <form class="flex flex-col space-y-4">
            <input
              type="text"
              class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
              placeholder="Name..."
            />
            <input
              type="email"
              class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
              placeholder="E-mail..."
            />
            <input
              type="text"
              class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
              placeholder="Subject..."
            />
            <textarea
              class="rounded-md border-slate-300 bg-slate-50 text-slate-600 shadow-sm placeholder:text-slate-400 focus:border-sky-600 focus:ring-sky-600 dark:border-slate-700 dark:bg-slate-950 dark:text-slate-200"
              placeholder="Message..."
            ></textarea>
            <button
              class="rounded-md bg-sky-500 py-2 text-lg font-bold text-white shadow-md duration-300 hover:bg-sky-600 active:bg-sky-400"
              type="submit"
            >
              Send
            </button>
          </form>
        </div>
      </section>
</x-blog-layout>