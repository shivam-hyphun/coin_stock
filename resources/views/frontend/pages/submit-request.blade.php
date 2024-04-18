@extends('layouts.app')

@section('content')
    <div class="flex min-h-screen flex-col items-center justify-start gap-2 px-4 py-2 md:px-4">
        <div class="w-full">
            <nav aria-label="Breadcrumb">
                <ol class="flex items-center gap-1 text-sm text-gray-600">



                    <li>
                        <a href="/" class="block transition hover:text-gray-700"> Home </a>
                    </li>

                    <li class="rtl:rotate-180">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </li>

                    <li>
                        <a href="#" class="block transition hover:text-gray-700"> Submit a Request </a>
                    </li>
                </ol>
            </nav>
            <p class="text-center text-2xl font-semibold">Submit a request</p>
        </div>
        <div class="mx-auto flex w-full max-w-8xl flex-col items-center justify-between gap-3 gap-x-8 px-10">
            <div class="grid w-full grid-cols-1 gap-2">
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Please review
                            ALL the
                            options and select the CORRECT form to ensure that your request gets routed
                            to the correct team. Please submit well-structured, actionable, and complete
                            information.</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Your email
                            address</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Subject Field
                            (Please
                            adhere to the format)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">"Please refer to this format as an
                            example.
                            [Project's full name] - [Symbol] - [Request, e.g. Add Market, Add cryptoasset/exchange, Update
                            cryptoasset/exchange, update supply]"</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Terms &
                            Conditions</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">I acknowledge that CoinMarketCap
                            reserves
                            the right, in their sole discretion, to determine the suitability of my request for the site. In
                            the event that CoinMarketCap rejects my request, I acknowledge that CoinMarketCap is not
                            obligated to inform me or provide any reasons for such refusal. I declare that the information
                            provided on the form is accurate and complete to the best of my knowledge and that failure to
                            fulfill these requirements may render my request inadmissible. I declare that I have read,
                            understood, and fully agree to the terms and conditions stipulated at</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Marketing
                            consent</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">I agree to receiving marketing related
                            communications from CoinMarketCap's team, including updates, news, events, features and
                            promotional emails regarding CoinMarketCap's products.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Relationship
                            with the
                            Project</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Please describe your relationship with
                            the
                            project (e.g. CEO, founder, employee, community member and exchange)</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Project Launch
                            Date</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">The date the project launched (e.g.
                            token
                            sale, genesis block, formation of company, drafting of business plan) Where possible, provide
                            evidence/links for verification.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Project
                            Name</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Please provide the FULL name of the
                            project
                            (e.g. Bitcoin, Ethereum, Ripple, Holochain, Binance, Bittrex).</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Project
                            Ticker/Symbol
                            (Do not put a $ sign if there is none in the ticker)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">(e.g. BTC, ETH, XRP, HOT)</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Cryptoasset
                            Tags -
                            Sector/Categories</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">You may select more than one tag.
                            Doing so
                            would allow users to filter assets by category membership.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">One-liner
                            description</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Provide a snappy and concise tagline
                            for
                            the project. E,g, KAVA - A Cross-Chain Platform for Decentralized Finance. Band Protocol -
                            Secure and scalable decentralized oracle for Web3.0. </p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Detailed
                            Project
                            Description (Cryptoasset)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">"Our data shows that our users spend
                            more
                            time on pages that use descriptions that adhere to this template: https://tinyurl.com/yy2mw9v7.
                            Recommended word count: 450 - 600 words. Provide a detailed description of your project, which
                            may be used on the asset page (https://coinmarketcap.com/currencies/cardano/), Minimize the use
                            of hyperbole, superlatives, and redundant statements (e.g. leading, amazing, best, first of its
                            kind, state of the art, decentralized blockchain). It should not read like a sales pitch. Focus
                            on factual statements about your project. Write in third-person. Be concise - avoid redundant
                            statements. (e.g. decentralized blockchain). For example, Launched in [dd/mm/yyyy] by a team
                            based in [country], [project] is a smart contract platform that enables developers to build
                            decentralized applications. See https://coinmarketcap.com/currencies/cardano/."</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Platform
                            (e.g. EOS,
                            NEO, Ethereum, proprietary blockchain).</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Please specify all token platforms
                            that
                            the asset is currently on. For example, CHZ has ERC20 and BEP20 tokens and is therefore on the
                            Ethereum and Binance blockchains.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Chain
                            Fork(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Specify the chain/asset that the was
                            project forked from (e.g. Bitcoin Cash was forked from Bitcoin and had the same blocks/history
                            prior to the fork). Not to be confused with project forks. For example, Litecoin was forked from
                            the Bitcoin source code, but it does not share the same block history. As such, Litecoin is NOT
                            a chain fork of Bitcoin. Where possible, provide evidence/links for verification.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Hashing/Consensus
                            Algorithm(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />


                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Team/Backers/Investors</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Provide a list of key employees,
                            investors, and advisors. Describe their core competencies and past experience/achievements, and
                            explain their involvement in your project. Where possible, provide evidence/links for
                            verification.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Media
                            Coverage/Awards(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Provide valid URL(s) to
                            articles/references.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Traction/Adoption/Partnerships/MVPs/Apps</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">This can take the form of user
                            growth,
                            partnerships, enterprise/consumer adoption, and roadmap progress. Quantify and qualify your
                            points with concrete and specific examples. Where possible, provide evidence/links for
                            verification.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Country of
                            Origin
                            (where majority of team is located)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Please indicate the country where the
                            majority of your team is located. If applicable, please provide a list of countries and indicate
                            the location of your headquarters.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Link to
                            Logo</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">3 conditions MUST be met: (1)
                            Transparent
                            background; (2) Square (200x200); unequal dimensions will be rejected! (3) PNG format. See
                            https://onlinepngtools.com/create-transparent-png and https://www.photoresizer.com/. If
                            possible, it is recommended that you provide logo URLs ending with .png so that our system can
                            extract the logo directly.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Website
                            1</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">There is data validation for this
                            field.
                            Kindly ensure that your URL conforms to the following format: https://www.website.com. If you
                            still have issues, feel free to insert a placeholder link. You can then add the real URL in the
                            comment/proof section in the last field of this form.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Website 2
                            (Optional)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">There is data validation for this
                            field.
                            Kindly ensure that your URL conforms to the following format: https://www.website.com. We
                            recommend adding your dexscan URL for this field (e.g.
                            https://coinmarketcap.com/dexscan/ethereum/0xa43fe16908251ee70ef74718545e4fe6c5ccec9f/) If you
                            still have issues, feel free to insert a placeholder link. You can then add the real URL in the
                            comment/proof section in the last field of this form.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Annex A -
                            Rich List &
                            Reserve Addresses (Mandatory for Circulating Supply/Ranking)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Paste the URL of your completed Annex
                            A
                            Google Sheet here. Please refer to the instructions in Cell A1 of this link and ensure that your
                            submission is in the CORRECT format:</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Emission/release
                            schedule(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Shows the emission/release schedule
                            of the
                            asset over time. See examples - https://skale.network/tokenomics, https://geeq.io/tokenomics/,
                            https://www.orchid.com/oxt</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Platform of
                            Contract
                            Address 1</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Select '-' if the platform is not in
                            the
                            dropdown</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Contract
                            Address
                            1</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">For MOVE contracts (e.g. APTOS, SUI),
                            pls
                            follow this format:
                            0xebbf537bc3686be32fe22b498b42715641bbb209267be72236a352e0444cc5df::sui_pepe::SUI_PEPE. Input
                            'NA' if there is no contract yet (for untracked listings).</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Number of
                            Decimals
                            (Contract Address 1)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">This is usually found on the explorer
                            page
                            of the asset. See example -</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Block
                            Explorer
                            1(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL with the CONTRACT
                            ADDRESS, e.g. https://etherscan.io/token/0x2260fac5e5542a773aa44fbcfedf7c193bc2c599. This is a
                            mandatory field for projects that are already trading on an exchange.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Block
                            Explorer(s) 2,
                            3, 4, 5 (e.g. Etherscan, Ethplorer)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL with the CONTRACT
                            ADDRESS, e.g. https://etherscan.io/token/0x2260fac5e5542a773aa44fbcfedf7c193bc2c599. If there is
                            more than 1 explorer URL, please separate each entry with a comma. For example,</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Source Code
                            (e.g.
                            Github, Gitter)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Whitepaper /
                            Technical Documentation(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Announcement
                            (e.g.
                            Bitcointalk)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Message
                            Board 1 (e.g.
                            Blog/Medium)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Message
                            Board(s) 2,
                            3, 4, 5 (e.g. Blog/Medium)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert valid URL(s). If there is more
                            than
                            1 URL, please separate each entry with a comma.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Twitter</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">There is data validation for this
                            field.
                            Kindly ensure that your URL conforms to the following format.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Reddit
                            (optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL for a subreddit.
                        </p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Facebook(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Video
                            Channel (e.g.
                            YouTube)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Chat 1 (e.g.
                            Discord,
                            Telegram, Slack, Weibo).</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">There is data validation for this
                            field.
                            Ex: </p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Chat(s) 2,
                            3, 4, 5
                            (e.g. Discord, Telegram, Slack, Weibo).(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert valid URL(s). If there is more
                            than
                            1 URL, please separate each entry with a comma.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">LinkedIn(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Mobile App 1
                            (e.g.
                            Google Play store, iTunes store)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert a valid URL.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Mobile
                            App(s) 2, 3,
                            4, 5 (e.g. Google Play store, iTunes store)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert valid URL(s). If there is more
                            than
                            1 URL, please separate each entry with a comma.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">"Circulating
                            Supply
                            (# of coins that are circulating in the market and in the general public's hands.)"</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert EXACT number of units (e.g.
                            21000000).</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">"Total
                            Supply (# of
                            coins in existence right now minus any coins that have been verifiably
                            burned.)(optional)"</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert EXACT number of units (e.g.
                            21000000).</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">"Max Supply
                            (maximum
                            # of coins that will ever exist in the lifetime of the asset)"</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert EXACT number of units (e.g.
                            21000000). If the max supply is infinite, type '0'</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">ICO/IEO
                            Start
                            Date(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />


                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">ICO/IEO End
                            Date(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />


                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">ICO/IEO/Launch
                            Price(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Insert USD Price</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">API endpoint
                            that
                            displays ONLY TOTAL SUPPLY as a NUMERICAL value (Type 'NA' if not applicable)(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">MUST be in this EXACT format -
                            http://chainz.cryptoid.info/grs/api.dws?q=totalcoins. Total Supply refers to the # of coins in
                            existence right now (minus any coins that have been verifiably burned.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">API endpoint
                            that
                            displays ONLY Circulating Supply as a numerical value(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">MUST be in this EXACT format -
                            http://chainz.cryptoid.info/grs/api.dws?q=circulating. Circulating Supply refers to the # of
                            coins that are circulating in the market and in the general public's hands</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">List of
                            CMC-supported
                            exchanges(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Enter NA if not applicable. Provide
                            (i)
                            screenshots (e.g. imgur/gyazo) and (ii) URLs that link directly to the market(s)/pair(s).
                            Separate each URL with a comma. See example -</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">[Optional]
                            Are you
                            willing to provide (dofollow) linkbacks to CMC?</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">8 out of 10 applicants are willing to
                            do
                            so. Please see: https://gyazo.com/d76a8f1d7293bf9155b57d617c9b6efc. To understand what
                            'dofollow' means, please see: https://blog.alexa.com/dofollow-vs-nofollow-links/</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">"[OPTIONAL]
                            Are you
                            willing to integrate the CoinMarketCap Telegram bot (https://t.me/CoinMarketCapPriceBot) into
                            your official Telegram group/s?"</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">8 out of 10 applicants are willing to
                            do
                            so. Please see: </p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">[OPTIONAL]
                            Are you
                            willing to prioritize the sharing of CMC DEXSCAN links in your socials? See </label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">CMC has a Telegram Bot </p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">ICO Page
                            Application(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">If you are keen to be featured on our
                            ICO
                            page, kindly bookmark this page and apply here AFTER you have been listed on CMC - </p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">SRD
                            Application</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Are you an official representative of
                            the
                            project? If so, please sign up for our self-reporting dashboard to manage certain fields on your
                            coin detail pages AFTER this application is complete. Kindly follow the steps outlined here to
                            complete the onboarding process</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email" class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Public
                            verification
                            post</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Please follow up your initial
                            application
                            with a public verification post. In order for us to display your contract address and explorer
                            data, please make a public post using one of the accounts (e.g. social media) associated with
                            the URLs found on the project's official website. In the post, mention the (i) ticket number
                            that you received from your CMC application and (ii) CMC Dexscan URL (if available, e.g.).
                            Provide the URL to the public post so that the CMC team can verify the information. This would
                            give the team a greater degree of assurance in ascertaining the legitimacy of the request. This
                            would prevent scammers from planting fake contract addresses. In addition, feel free to provide
                            telegram @username of someone who can vouch for the legitimacy of this application.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Proof/Supporting
                            evidence/documents</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">Provide proof (e.g. imgur, gyazo)
                            that the
                            request is authentic (e.g. info is reflected on website, announcement thread, twitter page,
                            etc.). Please ensure that the requested updates match what is found on the project’s
                            website/social media accounts. If the request entails changing the project’s website, please
                            explain why the team is unable to get the original URL to redirect to the new website. Type 'NA'
                            if not applicable.</p>
                    </div>
                </div>
                <div class="w-full">
                    <div>
                        <label for="email"
                            class="flex flex-wrap text-sm text-gray-500 dark:text-gray-300">Attachments(optional)</label>

                        <input type="email" placeholder="john@example.com"
                            class="mt-2 block w-full rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-gray-700 placeholder-gray-400/70 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" />

                        <p class="mt-3 flex flex-wrap text-xs text-gray-400">The date the project launched (e.g.
                            token
                            sale, genesis block, formation of company, drafting of business plan) Where possible, provide
                            evidence/links for verification.</p>
                    </div>
                </div>




            </div>
            {{--  submit Btn  --}}

            <div class="mt-6 flex justify-center">
                <button type="submit"
                    class="rounded-lg bg-blue-500 px-4 py-2 text-center text-base font-semibold text-white shadow-md transition duration-200 ease-in hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:ring-offset-2 focus:ring-offset-blue-100">
                    Submit
                </button>
            </div>


        </div>

    </div>
@endsection

@push('scripts')
@endpush
