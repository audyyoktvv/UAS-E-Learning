<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Auvia — Bursa Keahlian Digital oleh Audy Oktavia</title>
<meta name="description" content="Auvia mempertemukan pencari talenta dan pemilik keahlian lewat papan bursa yang transparan: kode proyek, tarif, dan reputasi terlihat sebelum deal dibuat. Dirancang oleh Audy Oktavia.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#14172A;
    --ink-soft:#20243D;
    --paper:#F7F5EE;
    --paper-dim:#EFECE2;
    --sage:#E7ECE4;
    --line:#DCD8CB;
    --line-dark:rgba(247,245,238,0.14);
    --amber:#E8A33D;
    --amber-dim:#F0C784;
    --emerald:#1F8A6E;
    --slate:#4C6B8A;
    --rose:#B5646B;
    --olive:#7C8B4A;
    --text:#181A2A;
    --text-mute:#5B5F72;
    --text-on-ink:#F1EFE6;
    --text-on-ink-mute:#A7ABC0;
    --radius-lg:22px;
    --radius-md:14px;
    --radius-sm:8px;
    --display: 'Archivo Black', sans-serif;
    --heading: 'Space Grotesk', sans-serif;
    --body: 'Inter', sans-serif;
    --mono: 'JetBrains Mono', monospace;
    --wrap:1200px;
  }
  *,*::before,*::after{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    font-family:var(--body);
    color:var(--text);
    background:var(--paper);
    -webkit-font-smoothing:antialiased;
  }
  img,svg{display:block;max-width:100%;}
  a{color:inherit;text-decoration:none;}
  button{font-family:inherit;cursor:pointer;}
  .wrap{max-width:var(--wrap);margin:0 auto;padding:0 32px;}
  h1,h2,h3{font-family:var(--heading);margin:0;letter-spacing:-0.01em;}
  p{margin:0;}
  .eyebrow{
    display:inline-flex;align-items:center;gap:8px;
    font-family:var(--mono);font-size:12px;letter-spacing:0.14em;text-transform:uppercase;
    padding:7px 14px 7px 10px;border-radius:999px;border:1px solid var(--line);
    color:var(--text-mute);width:fit-content;
  }
  .eyebrow .dot{width:7px;height:7px;border-radius:50%;background:var(--amber);flex-shrink:0;}
  .eyebrow.on-ink{border-color:var(--line-dark);color:var(--text-on-ink-mute);}
  .btn{
    display:inline-flex;align-items:center;gap:10px;
    padding:15px 26px;border-radius:999px;font-weight:600;font-size:15px;
    border:1px solid transparent;transition:transform .18s ease, box-shadow .18s ease, background .18s ease;
    white-space:nowrap;
  }
  .btn:hover{transform:translateY(-2px);}
  .btn-primary{background:var(--amber);color:var(--ink);}
  .btn-primary:hover{box-shadow:0 14px 26px -10px rgba(232,163,61,0.55);}
  .btn-ghost-ink{border-color:var(--line-dark);color:var(--text-on-ink);}
  .btn-ghost-ink:hover{border-color:var(--amber);}
  .btn-ghost{border-color:var(--line);color:var(--text);}
  .btn-ghost:hover{border-color:var(--ink);}
  .btn-sm{padding:10px 18px;font-size:13px;}

  /* ---------- TOP TICKER ---------- */
  .ticker-bar{
    background:var(--ink);color:var(--amber-dim);
    font-family:var(--mono);font-size:12px;letter-spacing:0.04em;
    overflow:hidden;white-space:nowrap;border-bottom:1px solid var(--line-dark);
  }
  .ticker-track{display:inline-flex;animation:tickerMove 32s linear infinite;padding:9px 0;}
  .ticker-track span{padding:0 22px;display:inline-flex;align-items:center;gap:10px;}
  .ticker-track span::after{content:'•';color:var(--text-on-ink-mute);margin-left:22px;}
  @keyframes tickerMove{ from{transform:translateX(0);} to{transform:translateX(-50%);} }

  /* ---------- NAV ---------- */
  .nav{
    position:relative;z-index:20;
    padding:22px 0 8px;
  }
  .nav .wrap{display:flex;align-items:center;justify-content:space-between;gap:24px;}
  .logo{display:flex;align-items:center;gap:10px;font-family:var(--heading);font-weight:700;font-size:20px;color:var(--text-on-ink);}
  .logo-mark{width:30px;height:30px;flex-shrink:0;}
  .nav-links{display:flex;align-items:center;gap:34px;list-style:none;margin:0;padding:0;}
  .nav-links a{font-size:14.5px;font-weight:500;color:var(--text-on-ink-mute);transition:color .15s;}
  .nav-links a:hover{color:var(--text-on-ink);}
  .nav-actions{display:flex;align-items:center;gap:12px;}
  .nav-toggle{display:none;}

  /* ---------- HERO ---------- */
  .hero{
    background:
      radial-gradient(120% 140% at 15% -10%, #1B2040 0%, var(--ink) 55%);
    color:var(--text-on-ink);
    border-radius:0 0 40px 40px;
    padding-bottom:64px;
    position:relative;
    overflow:hidden;
  }
  .hero::after{
    content:'';position:absolute;inset:auto -10% -30% auto;width:520px;height:520px;
    background:radial-gradient(circle, rgba(232,163,61,0.16), transparent 70%);
    pointer-events:none;
  }
  .hero-grid{
    display:grid;grid-template-columns:1.05fr 0.95fr;gap:56px;align-items:center;
    padding-top:44px;position:relative;z-index:2;
  }
  .hero-copy{display:flex;flex-direction:column;gap:24px;}
  .hero-copy h1{font-size:56px;line-height:1.06;font-weight:600;}
  .hero-copy h1 .line1{display:block;color:var(--text-on-ink);}
  .hero-copy h1 .line2{display:block;color:var(--amber);}
  .hero-copy p.lead{font-size:17px;line-height:1.7;color:var(--text-on-ink-mute);max-width:480px;}
  .hero-ctas{display:flex;gap:14px;flex-wrap:wrap;margin-top:6px;}
  .hero-trust{display:flex;align-items:center;gap:10px;font-size:13.5px;color:var(--text-on-ink-mute);margin-top:4px;}
  .hero-trust .avatars{display:flex;}
  .hero-trust .avatars span{
    width:26px;height:26px;border-radius:50%;border:2px solid var(--ink);margin-left:-8px;
    display:flex;align-items:center;justify-content:center;font-family:var(--mono);font-size:9px;color:var(--ink);font-weight:700;
  }
  .hero-trust .avatars span:first-child{margin-left:0;}

  .board{
    background:#0E1120;border:1px solid var(--line-dark);border-radius:var(--radius-lg);
    padding:22px;position:relative;z-index:2;box-shadow:0 30px 60px -25px rgba(0,0,0,0.6);
  }
  .board-head{display:flex;align-items:center;justify-content:space-between;margin-bottom:16px;padding:0 4px;}
  .board-head .title{font-family:var(--mono);font-size:12px;letter-spacing:0.12em;color:var(--text-on-ink-mute);text-transform:uppercase;}
  .board-head .live{display:flex;align-items:center;gap:6px;font-family:var(--mono);font-size:11px;color:var(--amber);}
  .board-head .live .pulse{width:6px;height:6px;border-radius:50%;background:var(--amber);animation:pulse 1.6s ease-in-out infinite;}
  @keyframes pulse{0%,100%{opacity:1;} 50%{opacity:0.25;}}
  .board-cols{display:grid;grid-template-columns:70px 1.6fr 90px 92px;gap:8px;padding:0 14px 10px;font-family:var(--mono);font-size:10.5px;letter-spacing:0.08em;color:var(--text-on-ink-mute);text-transform:uppercase;}
  .board-rows{display:flex;flex-direction:column;gap:6px;}
  .board-row{
    display:grid;grid-template-columns:70px 1.6fr 90px 92px;gap:8px;align-items:center;
    background:#171A2E;border:1px solid var(--line-dark);border-radius:10px;padding:12px 14px;
  }
  .flip-cell{perspective:240px;overflow:hidden;}
  .flip-text{display:inline-block;transition:transform .25s ease, opacity .25s ease;transform-style:preserve-3d;}
  .board-row.flipping .flip-text{transform:rotateX(85deg);opacity:0;}
  .board-row .code{font-family:var(--mono);font-size:12.5px;color:var(--amber-dim);}
  .board-row .skill{font-size:14px;font-weight:500;color:var(--text-on-ink);}
  .board-row .rate{font-family:var(--mono);font-size:12.5px;color:var(--text-on-ink-mute);}
  .status{display:inline-flex;align-items:center;gap:6px;font-family:var(--mono);font-size:10.5px;letter-spacing:0.06em;}
  .status-dot{width:7px;height:7px;border-radius:50%;background:var(--emerald);}
  .status-dot[data-state="full"]{background:var(--rose);}
  .status-dot[data-state="limited"]{background:var(--amber);}

  .stat-strip{
    margin-top:44px;display:grid;grid-template-columns:repeat(4,1fr);gap:0;
    border:1px solid var(--line-dark);border-radius:var(--radius-md);overflow:hidden;position:relative;z-index:2;
  }
  .stat{padding:22px 24px;border-right:1px solid var(--line-dark);}
  .stat:last-child{border-right:none;}
  .stat .num{font-family:var(--display);font-size:26px;color:var(--amber);}
  .stat .label{font-family:var(--mono);font-size:11.5px;color:var(--text-on-ink-mute);margin-top:6px;text-transform:uppercase;letter-spacing:0.05em;}

  /* ---------- SECTION HEADERS ---------- */
  section{padding:90px 0;}
  .section-head{display:flex;flex-direction:column;gap:18px;max-width:640px;margin-bottom:52px;}
  .section-head h2{font-size:38px;line-height:1.2;font-weight:600;}
  .section-head p{color:var(--text-mute);font-size:16.5px;line-height:1.65;}
  .section-head.center{align-items:center;text-align:center;margin-left:auto;margin-right:auto;}

  /* ---------- CATEGORIES ---------- */
  .cat-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;}
  .cat-grid .row2{grid-column:1/-1;display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:18px;}
  .cat-card{
    background:#fff;border:1px solid var(--line);border-radius:var(--radius-md);
    padding:22px;display:flex;flex-direction:column;gap:16px;transition:border-color .2s ease, transform .2s ease, box-shadow .2s ease;
    position:relative;
  }
  .cat-card:hover{border-color:var(--amber);transform:translateY(-4px);box-shadow:0 20px 30px -20px rgba(20,23,42,0.25);}
  .cat-card .code{position:absolute;top:18px;right:20px;font-family:var(--mono);font-size:11px;color:var(--text-mute);}
  .cat-icon{width:46px;height:46px;border-radius:12px;background:var(--paper-dim);display:flex;align-items:center;justify-content:center;color:var(--ink);}
  .cat-icon svg{width:24px;height:24px;stroke:var(--ink);}
  .cat-card h3{font-size:17px;font-weight:600;font-family:var(--body);}
  .cat-card .count{font-family:var(--mono);font-size:12.5px;color:var(--text-mute);}

  /* ---------- TALENTS ---------- */
  .talents-section{background:var(--sage);border-radius:40px;}
  .carousel-head{display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:36px;gap:24px;}
  .carousel-nav{display:flex;gap:10px;flex-shrink:0;}
  .cnav-btn{
    width:44px;height:44px;border-radius:50%;border:1px solid var(--line);background:#fff;
    display:flex;align-items:center;justify-content:center;transition:background .15s, border-color .15s;
  }
  .cnav-btn:hover{background:var(--ink);border-color:var(--ink);}
  .cnav-btn:hover svg{stroke:#fff;}
  .cnav-btn svg{width:18px;height:18px;stroke:var(--ink);}
  .carousel{display:flex;gap:22px;overflow-x:auto;scroll-snap-type:x mandatory;padding-bottom:8px;scrollbar-width:none;}
  .carousel::-webkit-scrollbar{display:none;}
  .talent-card{
    scroll-snap-align:start;flex:0 0 320px;background:#fff;border-radius:20px;
    border:1px solid var(--line);overflow:hidden;position:relative;
  }
  .talent-top{padding:22px 22px 20px;display:flex;flex-direction:column;gap:14px;}
  .talent-avatar-row{display:flex;align-items:center;gap:12px;}
  .avatar{width:48px;height:48px;border-radius:50%;flex-shrink:0;}
  .talent-name{font-weight:600;font-size:16px;}
  .talent-role{font-size:13px;color:var(--text-mute);}
  .talent-tags{display:flex;gap:8px;flex-wrap:wrap;}
  .tag{font-family:var(--mono);font-size:11px;padding:5px 10px;border-radius:6px;background:var(--paper-dim);color:var(--text-mute);}
  .ticket-divider{
    position:relative;border-top:1.5px dashed var(--line);margin:0 0;
  }
  .ticket-divider::before,.ticket-divider::after{
    content:'';position:absolute;top:-9px;width:18px;height:18px;border-radius:50%;background:var(--sage);
  }
  .ticket-divider::before{left:-9px;}
  .ticket-divider::after{right:-9px;}
  .talent-bottom{padding:16px 22px 20px;display:flex;align-items:center;justify-content:space-between;}
  .talent-rate{font-family:var(--mono);font-size:13.5px;font-weight:700;}
  .talent-rating{display:flex;align-items:center;gap:6px;font-size:12.5px;color:var(--text-mute);}
  .talent-rating svg{width:14px;height:14px;fill:var(--amber);}

  /* ---------- TRUST ---------- */
  .trust-grid{display:grid;grid-template-columns:0.85fr 1.15fr;gap:64px;align-items:center;}
  .trust-visual{position:relative;}
  .trust-illustration{width:100%;border-radius:var(--radius-lg);background:linear-gradient(160deg,#EFE7D6,#E3E9DC);padding:36px;aspect-ratio:1/1.05;display:flex;align-items:center;justify-content:center;}
  .trust-card{
    position:absolute;bottom:-26px;right:-24px;width:250px;background:#fff;border-radius:18px;
    padding:20px;box-shadow:0 24px 48px -22px rgba(20,23,42,0.28);border:1px solid var(--line);
  }
  .trust-card h4{font-size:14px;font-weight:700;margin-bottom:14px;font-family:var(--heading);}
  .trust-item{display:flex;align-items:center;gap:10px;padding:7px 0;font-size:13.5px;font-weight:500;}
  .trust-item svg{width:18px;height:18px;stroke:var(--emerald);flex-shrink:0;}
  .trust-copy{display:flex;flex-direction:column;gap:22px;}
  .trust-copy h2{font-size:34px;line-height:1.25;font-weight:600;}
  .trust-copy p{color:var(--text-mute);font-size:16px;line-height:1.7;}

  /* ---------- TESTIMONIALS ---------- */
  .testi-section{background:var(--ink);color:var(--text-on-ink);border-radius:40px;}
  .testi-section .section-head p{color:var(--text-on-ink-mute);}
  .testi-track-wrap{overflow:hidden;position:relative;margin-top:8px;}
  .testi-track-wrap::before,.testi-track-wrap::after{
    content:'';position:absolute;top:0;bottom:0;width:80px;z-index:2;
  }
  .testi-track-wrap::before{left:0;background:linear-gradient(to right, var(--ink), transparent);}
  .testi-track-wrap::after{right:0;background:linear-gradient(to left, var(--ink), transparent);}
  .testi-row{display:flex;gap:18px;width:max-content;}
  .testi-row.left{animation:scrollL 46s linear infinite;margin-bottom:18px;}
  .testi-row.right{animation:scrollR 46s linear infinite;}
  @keyframes scrollL{from{transform:translateX(0);}to{transform:translateX(-50%);}}
  @keyframes scrollR{from{transform:translateX(-50%);}to{transform:translateX(0);}}
  .quote-card{
    width:340px;flex-shrink:0;background:var(--ink-soft);border:1px solid var(--line-dark);
    border-radius:16px;padding:22px;display:flex;flex-direction:column;gap:14px;
  }
  .quote-card .quote-mark{font-family:var(--display);font-size:26px;color:var(--amber);line-height:1;}
  .quote-card p.text{font-size:14.5px;line-height:1.65;color:var(--text-on-ink);}
  .quote-foot{display:flex;align-items:center;gap:10px;margin-top:2px;}
  .quote-foot .qname{font-size:13.5px;font-weight:600;}
  .quote-foot .qrole{font-size:12px;color:var(--text-on-ink-mute);}

  /* ---------- FAQ ---------- */
  .faq-grid{display:grid;grid-template-columns:0.8fr 1.2fr;gap:60px;}
  .faq-copy{display:flex;flex-direction:column;gap:22px;}
  .faq-copy h2{font-size:34px;line-height:1.25;font-weight:600;}
  .faq-copy p{color:var(--text-mute);font-size:16px;line-height:1.7;}
  .faq-list{display:flex;flex-direction:column;gap:14px;}
  .faq-item{background:#fff;border:1px solid var(--line);border-radius:16px;padding:20px 22px;transition:border-color .2s;}
  .faq-item.open{border-color:var(--amber);}
  .faq-q{display:flex;justify-content:space-between;align-items:center;gap:16px;width:100%;background:none;border:none;text-align:left;}
  .faq-q .num{font-family:var(--mono);font-size:12px;color:var(--amber);margin-right:12px;}
  .faq-q .qtext{font-size:16px;font-weight:600;flex:1;font-family:var(--heading);}
  .faq-q .icon{width:22px;height:22px;flex-shrink:0;position:relative;}
  .faq-q .icon::before,.faq-q .icon::after{content:'';position:absolute;background:var(--ink);border-radius:2px;}
  .faq-q .icon::before{width:14px;height:2px;top:10px;left:4px;}
  .faq-q .icon::after{width:2px;height:14px;top:4px;left:10px;transition:transform .2s ease;}
  .faq-item.open .faq-q .icon::after{transform:rotate(90deg);}
  .faq-a{max-height:0;overflow:hidden;transition:max-height .3s ease;}
  .faq-a p{padding-top:14px;color:var(--text-mute);font-size:14.5px;line-height:1.7;}

  /* ---------- FOUNDER ---------- */
  .founder-section{background:var(--paper-dim);border-radius:40px;}
  .founder-grid{display:grid;grid-template-columns:0.8fr 1.2fr;gap:64px;align-items:center;}
  .founder-visual{position:relative;}
  .founder-portrait{
    border-radius:var(--radius-lg);overflow:hidden;border:1px solid var(--line);
    aspect-ratio:3/3.6;background:var(--ink);
  }
  .founder-portrait img{width:100%;height:100%;object-fit:cover;object-position:center 18%;}
  .founder-badge{
    position:absolute;bottom:-28px;right:-22px;width:236px;background:#fff;border-radius:16px;
    padding:14px;box-shadow:0 22px 44px -20px rgba(20,23,42,0.3);border:1px solid var(--line);
    display:flex;gap:12px;align-items:center;
  }
  .founder-badge img{width:48px;height:48px;border-radius:10px;object-fit:cover;flex-shrink:0;}
  .founder-badge .badge-label{font-family:var(--mono);font-size:9.5px;color:var(--amber);text-transform:uppercase;letter-spacing:0.06em;}
  .founder-badge .badge-title{font-size:12.5px;font-weight:700;line-height:1.35;margin-top:3px;}
  .founder-copy{display:flex;flex-direction:column;gap:20px;}
  .founder-copy h2{font-size:34px;line-height:1.25;font-weight:600;}
  .founder-copy p{color:var(--text-mute);font-size:16px;line-height:1.75;}
  .founder-copy .role{font-family:var(--mono);font-size:12.5px;color:var(--amber);letter-spacing:0.05em;}
  .founder-proof{display:flex;gap:16px;margin-top:6px;flex-wrap:wrap;}
  .proof-chip{
    display:flex;align-items:center;gap:12px;background:#fff;border:1px solid var(--line);
    border-radius:14px;padding:10px 16px 10px 10px;flex:1;min-width:240px;
  }
  .proof-chip img{width:52px;height:52px;border-radius:10px;object-fit:cover;flex-shrink:0;}
  .proof-chip .proof-title{font-size:13.5px;font-weight:600;line-height:1.3;}
  .proof-chip .proof-sub{font-family:var(--mono);font-size:10.5px;color:var(--text-mute);margin-top:3px;}

  /* ---------- FOOTER ---------- */
  .footer{background:var(--ink);color:var(--text-on-ink);border-radius:40px 40px 0 0;padding:70px 0 30px;}
  .footer-top{display:grid;grid-template-columns:1.4fr repeat(3,1fr);gap:40px;padding-bottom:56px;}
  .footer-about p{color:var(--text-on-ink-mute);font-size:14px;line-height:1.7;margin-top:14px;max-width:260px;}
  .footer-social{display:flex;gap:10px;margin-top:22px;}
  .social-btn{width:36px;height:36px;border-radius:50%;border:1px solid var(--line-dark);display:flex;align-items:center;justify-content:center;transition:border-color .15s;}
  .social-btn:hover{border-color:var(--amber);}
  .social-btn svg{width:15px;height:15px;stroke:var(--text-on-ink);}
  .footer-col h4{font-family:var(--mono);font-size:12px;letter-spacing:0.08em;text-transform:uppercase;color:var(--text-on-ink-mute);margin-bottom:18px;font-weight:500;}
  .footer-col ul{list-style:none;margin:0;padding:0;display:flex;flex-direction:column;gap:12px;}
  .footer-col a{font-size:14.5px;color:var(--text-on-ink-mute);transition:color .15s;}
  .footer-col a:hover{color:var(--text-on-ink);}
  .footer-col li.badge-row{display:flex;align-items:center;gap:8px;}
  .mini-badge{font-family:var(--mono);font-size:10px;padding:3px 8px;border-radius:999px;background:rgba(232,163,61,0.16);color:var(--amber);}
  .footer-bottom{border-top:1px solid var(--line-dark);padding-top:24px;display:flex;justify-content:space-between;align-items:center;font-size:13px;color:var(--text-on-ink-mute);}

  /* ---------- RESPONSIVE ---------- */
  @media (max-width:980px){
    .hero-grid{grid-template-columns:1fr;}
    .board-cols{display:none;}
    .stat-strip{grid-template-columns:repeat(2,1fr);}
    .stat:nth-child(2){border-right:none;}
    .stat:nth-child(3){border-top:1px solid var(--line-dark);}
    .stat:nth-child(4){border-top:1px solid var(--line-dark);}
    .cat-grid{grid-template-columns:repeat(2,1fr);}
    .cat-grid .row2{grid-template-columns:repeat(2,1fr);}
    .trust-grid{grid-template-columns:1fr;}
    .trust-visual{margin-bottom:60px;}
    .founder-grid{grid-template-columns:1fr;}
    .founder-visual{margin-bottom:70px;max-width:340px;margin-left:auto;margin-right:auto;}
    .faq-grid{grid-template-columns:1fr;}
    .footer-top{grid-template-columns:1fr 1fr;}
    .nav-links{display:none;}
  }
  @media (max-width:640px){
    .wrap{padding:0 20px;}
    .hero-copy h1{font-size:38px;}
    section{padding:60px 0;}
    .section-head h2{font-size:28px;}
    .cat-grid{grid-template-columns:1fr;}
    .cat-grid .row2{grid-template-columns:1fr;}
    .stat-strip{grid-template-columns:1fr 1fr;}
    .footer-top{grid-template-columns:1fr;gap:32px;}
    .talent-card{flex:0 0 280px;}
    .founder-badge{position:static;width:100%;margin-top:16px;}
    .proof-chip{min-width:100%;}
  }
  @media (prefers-reduced-motion: reduce){
    .ticker-track, .testi-row, .board-head .live .pulse{animation:none !important;}
  }
</style>
</head>
<body>

<!-- TOP TICKER -->
<div class="ticker-bar">
  <div class="ticker-track">
    <span>PAPAN BURSA LIVE — 214 talenta online</span>
    <span>Eskrow aman: dana cair 1×24 jam setelah proyek diterima</span>
    <span>Rating rata-rata klien 4.9/5</span>
    <span>35 kategori keahlian, 12.400+ talenta terverifikasi</span>
    <span>PAPAN BURSA LIVE — 214 talenta online</span>
    <span>Eskrow aman: dana cair 1×24 jam setelah proyek diterima</span>
    <span>Rating rata-rata klien 4.9/5</span>
    <span>35 kategori keahlian, 12.400+ talenta terverifikasi</span>
  </div>
</div>

<!-- HERO (includes nav inside for dark bg continuity) -->
<div class="hero">
  <header class="nav">
    <div class="wrap">
      <a href="#" class="logo">
        <svg class="logo-mark" viewBox="0 0 32 32" fill="none">
          <rect x="4" y="4" width="24" height="11" rx="4" fill="#E8A33D"/>
          <rect x="4" y="17" width="24" height="11" rx="4" fill="#F1EFE6" fill-opacity="0.9"/>
          <circle cx="16" cy="15.5" r="2.4" fill="#14172A"/>
        </svg>
        Auvia.
      </a>
      <ul class="nav-links">
        <li><a href="#kategori">Jelajahi</a></li>
        <li><a href="#talenta">Talenta Pilihan</a></li>
        <li><a href="#cara-kerja">Cara Kerja</a></li>
        <li><a href="#tentang">Tentang</a></li>
        <li><a href="#kisah">Kisah Sukses</a></li>
      </ul>
      <div class="nav-actions">
        <a href="#" class="btn btn-ghost-ink btn-sm">Masuk</a>
        <a href="#" class="btn btn-primary btn-sm">Buka Etalase</a>
      </div>
    </div>
  </header>

  <div class="wrap">
    <div class="hero-grid">
      <div class="hero-copy">
        <div class="eyebrow on-ink"><span class="dot"></span>212 proyek baru dibuka minggu ini</div>
        <h1>
          <span class="line1">Cari Ahlinya,</span>
          <span class="line2">Bukan yang Murahnya.</span>
        </h1>
        <p class="lead">Auvia mempertemukan pencari keahlian dan pemilik keahlian lewat papan Auvia yang transparan — kode proyek, tarif, dan reputasi terlihat jelas sebelum kesepakatan dibuat.</p>
        <div class="hero-ctas">
          <a href="#talenta" class="btn btn-primary">Jelajahi Talenta →</a>
          <a href="#" class="btn btn-ghost-ink">Buka Etalase Skillmu</a>
        </div>
        <div class="hero-trust">
          <div class="avatars">
            <span style="background:#E8A33D">RA</span>
            <span style="background:#7C8B4A">NP</span>
            <span style="background:#4C6B8A">YH</span>
            <span style="background:#B5646B">CW</span>
          </div>
          <span>Dipercaya 12.400+ talenta lepas di 35 kategori</span>
        </div>
      </div>

      <div class="board">
        <div class="board-head">
          <span class="title">Papan Auvia · Hari Ini</span>
          <span class="live"><span class="pulse"></span>Live</span>
        </div>
        <div class="board-cols">
          <span>Kode</span><span>Keahlian</span><span>Tarif</span><span>Status</span>
        </div>
        <div class="board-rows" id="board">
          <div class="board-row">
            <div class="flip-cell"><span class="flip-text code">UI-014</span></div>
            <div class="flip-cell"><span class="flip-text skill">Desain Produk</span></div>
            <div class="flip-cell"><span class="flip-text rate">Rp450K</span></div>
            <div class="status"><span class="status-dot" data-state="open"></span><span class="flip-text st-label">DIBUKA</span></div>
          </div>
          <div class="board-row">
            <div class="flip-cell"><span class="flip-text code">DEV-207</span></div>
            <div class="flip-cell"><span class="flip-text skill">Front-End React</span></div>
            <div class="flip-cell"><span class="flip-text rate">Rp750K</span></div>
            <div class="status"><span class="status-dot" data-state="open"></span><span class="flip-text st-label">DIBUKA</span></div>
          </div>
          <div class="board-row">
            <div class="flip-cell"><span class="flip-text code">CPY-118</span></div>
            <div class="flip-cell"><span class="flip-text skill">Copywriting Iklan</span></div>
            <div class="flip-cell"><span class="flip-text rate">Rp250K</span></div>
            <div class="status"><span class="status-dot" data-state="limited"></span><span class="flip-text st-label">2 SLOT</span></div>
          </div>
          <div class="board-row">
            <div class="flip-cell"><span class="flip-text code">MKT-092</span></div>
            <div class="flip-cell"><span class="flip-text skill">SEO &amp; Ads</span></div>
            <div class="flip-cell"><span class="flip-text rate">Rp500K</span></div>
            <div class="status"><span class="status-dot" data-state="open"></span><span class="flip-text st-label">DIBUKA</span></div>
          </div>
          <div class="board-row">
            <div class="flip-cell"><span class="flip-text code">VID-045</span></div>
            <div class="flip-cell"><span class="flip-text skill">Motion Graphic</span></div>
            <div class="flip-cell"><span class="flip-text rate">Rp600K</span></div>
            <div class="status"><span class="status-dot" data-state="full"></span><span class="flip-text st-label">PENUH</span></div>
          </div>
        </div>
      </div>
    </div>

    <div class="stat-strip">
      <div class="stat"><div class="num">12.4K+</div><div class="label">Talenta Terverifikasi</div></div>
      <div class="stat"><div class="num">98.2%</div><div class="label">Proyek Selesai Tepat Waktu</div></div>
      <div class="stat"><div class="num">4.9/5</div><div class="label">Rating Rata-rata Klien</div></div>
      <div class="stat"><div class="num">35</div><div class="label">Kategori Keahlian Aktif</div></div>
    </div>
  </div>
</div>

<!-- CATEGORIES -->
<section id="kategori">
  <div class="wrap">
    <div class="section-head">
      <div class="eyebrow"><span class="dot"></span>Etalase Populer</div>
      <h2>Cari berdasarkan keahlian, bukan kategori generik</h2>
      <p>Setiap etalase punya kodenya sendiri, supaya kamu tahu persis ke mana harus mencari — dan berapa banyak talenta yang siap dihubungi.</p>
    </div>

    <div class="cat-grid">
      <a href="#" class="cat-card">
        <span class="code">K-01</span>
        <div class="cat-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 17l7-7 3 3 6-6"/><path d="M13 7h6v6"/></svg></div>
        <h3>Desain &amp; Kreatif</h3>
        <span class="count">3.200 talenta aktif</span>
      </a>
      <a href="#" class="cat-card">
        <span class="code">K-02</span>
        <div class="cat-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M8 6L2 12l6 6"/><path d="M16 6l6 6-6 6"/></svg></div>
        <h3>Pengembangan Web</h3>
        <span class="count">2.800 talenta aktif</span>
      </a>
      <a href="#" class="cat-card">
        <span class="code">K-03</span>
        <div class="cat-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 11v2a2 2 0 002 2h2l5 4V5L7 9H5a2 2 0 00-2 2z"/><path d="M17 8a5 5 0 010 8"/></svg></div>
        <h3>Pemasaran Digital</h3>
        <span class="count">1.900 talenta aktif</span>
      </a>
      <a href="#" class="cat-card">
        <span class="code">K-04</span>
        <div class="cat-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6 3h9l4 4v14a1 1 0 01-1 1H6a1 1 0 01-1-1V4a1 1 0 011-1z"/><path d="M9 13h6M9 17h6M9 9h3"/></svg></div>
        <h3>Penulisan &amp; Terjemahan</h3>
        <span class="count">1.400 talenta aktif</span>
      </a>
      <div class="row2">
        <a href="#" class="cat-card">
          <span class="code">K-05</span>
          <div class="cat-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 20V10M11 20V4M18 20v-7"/></svg></div>
          <h3>Analisis Data</h3>
          <span class="count">980 talenta aktif</span>
        </a>
        <a href="#" class="cat-card">
          <span class="code">K-06</span>
          <div class="cat-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M10 9.5v5l4-2.5z" fill="currentColor" stroke="none"/></svg></div>
          <h3>Video &amp; Animasi</h3>
          <span class="count">1.100 talenta aktif</span>
        </a>
        <a href="#" class="cat-card">
          <span class="code">K-07</span>
          <div class="cat-icon"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="12" rx="2"/><path d="M8 8V6a2 2 0 012-2h4a2 2 0 012 2v2"/></svg></div>
          <h3>Bisnis &amp; Konsultasi</h3>
          <span class="count">760 talenta aktif</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- TALENTS -->
<section id="talenta" class="talents-section">
  <div class="wrap">
    <div class="carousel-head">
      <div class="section-head" style="margin-bottom:0;">
        <div class="eyebrow"><span class="dot"></span>Talenta Pilihan</div>
        <h2>Sudah diuji pasar, bukan cuma CV</h2>
        <p>Rekam jejak nyata dari proyek yang benar-benar selesai dan dibayar.</p>
      </div>
      <div class="carousel-nav">
        <button class="cnav-btn" id="prevBtn" aria-label="Sebelumnya"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M15 6l-6 6 6 6"/></svg></button>
        <button class="cnav-btn" id="nextBtn" aria-label="Berikutnya"><svg viewBox="0 0 24 24" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M9 6l6 6-6 6"/></svg></button>
      </div>
    </div>

    <div class="carousel" id="talentCarousel">
      <!-- card template repeated -->
      <div class="talent-card">
        <div class="talent-top">
          <div class="talent-avatar-row">
            <svg class="avatar" viewBox="0 0 48 48"><rect width="48" height="48" rx="24" fill="#E8A33D"/><circle cx="24" cy="19" r="8" fill="#14172A" fill-opacity="0.85"/><path d="M8 42c2-9 8-13 16-13s14 4 16 13" fill="#14172A" fill-opacity="0.85"/></svg>
            <div><div class="talent-name">Raka Aditya</div><div class="talent-role">Desainer Produk</div></div>
          </div>
          <div class="talent-tags"><span class="tag">UI/UX</span><span class="tag">Design System</span></div>
        </div>
        <div class="ticket-divider"></div>
        <div class="talent-bottom">
          <span class="talent-rate">Rp450K / proyek</span>
          <span class="talent-rating"><svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/></svg>4.9 (128)</span>
        </div>
      </div>

      <div class="talent-card">
        <div class="talent-top">
          <div class="talent-avatar-row">
            <svg class="avatar" viewBox="0 0 48 48"><rect width="48" height="48" rx="24" fill="#7C8B4A"/><circle cx="24" cy="19" r="8" fill="#F1EFE6" fill-opacity="0.9"/><path d="M8 42c2-9 8-13 16-13s14 4 16 13" fill="#F1EFE6" fill-opacity="0.9"/></svg>
            <div><div class="talent-name">Nadia Putri</div><div class="talent-role">Full-Stack Developer</div></div>
          </div>
          <div class="talent-tags"><span class="tag">React</span><span class="tag">Node.js</span></div>
        </div>
        <div class="ticket-divider"></div>
        <div class="talent-bottom">
          <span class="talent-rate">Rp750K / proyek</span>
          <span class="talent-rating"><svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/></svg>5.0 (64)</span>
        </div>
      </div>

      <div class="talent-card">
        <div class="talent-top">
          <div class="talent-avatar-row">
            <svg class="avatar" viewBox="0 0 48 48"><rect width="48" height="48" rx="24" fill="#4C6B8A"/><circle cx="24" cy="19" r="8" fill="#F1EFE6" fill-opacity="0.9"/><path d="M8 42c2-9 8-13 16-13s14 4 16 13" fill="#F1EFE6" fill-opacity="0.9"/></svg>
            <div><div class="talent-name">Yusuf Hakim</div><div class="talent-role">Copywriter Iklan</div></div>
          </div>
          <div class="talent-tags"><span class="tag">Ads Copy</span><span class="tag">Email</span></div>
        </div>
        <div class="ticket-divider"></div>
        <div class="talent-bottom">
          <span class="talent-rate">Rp250K / proyek</span>
          <span class="talent-rating"><svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/></svg>4.8 (212)</span>
        </div>
      </div>

      <div class="talent-card">
        <div class="talent-top">
          <div class="talent-avatar-row">
            <svg class="avatar" viewBox="0 0 48 48"><rect width="48" height="48" rx="24" fill="#B5646B"/><circle cx="24" cy="19" r="8" fill="#F1EFE6" fill-opacity="0.9"/><path d="M8 42c2-9 8-13 16-13s14 4 16 13" fill="#F1EFE6" fill-opacity="0.9"/></svg>
            <div><div class="talent-name">Clara Wijaya</div><div class="talent-role">Motion Designer</div></div>
          </div>
          <div class="talent-tags"><span class="tag">After Effects</span><span class="tag">2D</span></div>
        </div>
        <div class="ticket-divider"></div>
        <div class="talent-bottom">
          <span class="talent-rate">Rp600K / proyek</span>
          <span class="talent-rating"><svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/></svg>4.9 (97)</span>
        </div>
      </div>

      <div class="talent-card">
        <div class="talent-top">
          <div class="talent-avatar-row">
            <svg class="avatar" viewBox="0 0 48 48"><rect width="48" height="48" rx="24" fill="#E8A33D"/><circle cx="24" cy="19" r="8" fill="#14172A" fill-opacity="0.85"/><path d="M8 42c2-9 8-13 16-13s14 4 16 13" fill="#14172A" fill-opacity="0.85"/></svg>
            <div><div class="talent-name">Dimas Pratama</div><div class="talent-role">SEO Specialist</div></div>
          </div>
          <div class="talent-tags"><span class="tag">SEO</span><span class="tag">Google Ads</span></div>
        </div>
        <div class="ticket-divider"></div>
        <div class="talent-bottom">
          <span class="talent-rate">Rp500K / proyek</span>
          <span class="talent-rating"><svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/></svg>4.7 (150)</span>
        </div>
      </div>

      <div class="talent-card">
        <div class="talent-top">
          <div class="talent-avatar-row">
            <svg class="avatar" viewBox="0 0 48 48"><rect width="48" height="48" rx="24" fill="#1F8A6E"/><circle cx="24" cy="19" r="8" fill="#F1EFE6" fill-opacity="0.9"/><path d="M8 42c2-9 8-13 16-13s14 4 16 13" fill="#F1EFE6" fill-opacity="0.9"/></svg>
            <div><div class="talent-name">Salsabila Rahma</div><div class="talent-role">Data Analyst</div></div>
          </div>
          <div class="talent-tags"><span class="tag">SQL</span><span class="tag">Dashboard</span></div>
        </div>
        <div class="ticket-divider"></div>
        <div class="talent-bottom">
          <span class="talent-rate">Rp550K / proyek</span>
          <span class="talent-rating"><svg viewBox="0 0 24 24"><path d="M12 2l3.1 6.3 6.9 1-5 4.9 1.2 6.8L12 17.8 5.8 21l1.2-6.8-5-4.9 6.9-1z"/></svg>5.0 (58)</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST / HOW IT WORKS -->
<section id="cara-kerja">
  <div class="wrap">
    <div class="trust-grid">
      <div class="trust-visual">
        <div class="trust-illustration">
          <svg viewBox="0 0 220 220" width="80%">
            <circle cx="110" cy="110" r="95" fill="#14172A"/>
            <rect x="52" y="70" width="80" height="56" rx="12" fill="#E8A33D"/>
            <path d="M60 126l14 14 14-14" fill="#E8A33D"/>
            <circle cx="72" cy="96" r="5" fill="#14172A"/>
            <circle cx="92" cy="96" r="5" fill="#14172A"/>
            <circle cx="112" cy="96" r="5" fill="#14172A"/>
            <rect x="120" y="118" width="58" height="58" rx="14" fill="#F1EFE6"/>
            <path d="M136 147l9 9 17-17" stroke="#1F8A6E" stroke-width="5" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="trust-card">
          <h4>Jaminan Auvia</h4>
          <div class="trust-item"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3l7 3v6c0 5-3.2 8.5-7 9.5C8.2 20.5 5 17 5 12V6z"/></svg>Eskrow aman</div>
          <div class="trust-item"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.4 8.4 0 01-8.6 8.5 8.7 8.7 0 01-4-1L3 20l1.1-4.6A8.4 8.4 0 0121 11.5z"/></svg>Chat real-time</div>
          <div class="trust-item"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4v6h6M20 20v-6h-6"/><path d="M5.5 15a7 7 0 0012.7 2.6M18.5 9a7 7 0 00-12.7-2.6"/></svg>Revisi terjamin</div>
          <div class="trust-item"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M12 8v5l3 2"/><circle cx="12" cy="13" r="8"/><path d="M9 2h6"/></svg>Cair 1×24 jam</div>
        </div>
      </div>
      <div class="trust-copy">
        <div class="eyebrow"><span class="dot"></span>Kenapa Auvia</div>
        <h2>Transaksi aman dari deal sampai selesai</h2>
        <p>Dana klien ditahan di eskrow Auvia sejak proyek dimulai, dan baru cair ke talenta setelah hasil kerja diterima. Kalau ada perbedaan pendapat, tim mediasi kami turun tangan sebelum uang berpindah tangan.</p>
        <a href="#" class="btn btn-ghost" style="width:fit-content;">Lihat Selengkapnya Cara Kerja</a>
      </div>
    </div>
  </div>
</section>

<!-- FOUNDER / ABOUT -->
<section id="tentang" class="founder-section">
  <div class="wrap">
    <div class="founder-grid">
      <div class="founder-visual">
        <div class="founder-portrait">
          <img src="assets/audy-portrait.jpg" alt="Audy Oktavia, pendiri Auvia">
        </div>
        <div class="founder-badge">
          <img src="assets/audy-award.jpg" alt="Audy Oktavia menerima penghargaan Liga Talenta Mahasiswa Indonesia 2026">
          <div>
            <div class="badge-label">Penghargaan</div>
            <div class="badge-title">Juara Harapan 1 — Liga Talenta Mahasiswa Indonesia 2026</div>
          </div>
        </div>
      </div>
      <div class="founder-copy">
        <div class="eyebrow"><span class="dot"></span>Sosok di Balik Auvia</div>
        <h2>Dibangun oleh Audy Oktavia</h2>
        <p class="role">Founder &amp; Product Designer — Auvia</p>
        <p>Auvia lahir dari pengalaman langsung melihat betapa sulitnya talenta muda membuktikan kemampuan tanpa portofolio panjang. Audy Oktavia merancang papan bursa ini supaya tarif, reputasi, dan hasil kerja bisa dilihat apa adanya — baik oleh talenta baru maupun klien yang mencari mereka.</p>
        <div class="founder-proof">
          <div class="proof-chip">
            <img src="assets/audy-presenting.jpg" alt="Audy Oktavia mempresentasikan proyek Pilah Pilih di panggung Business Poster and Pitching Competition">
            <div>
              <div class="proof-title">Business Poster &amp; Pitching Competition 2026</div>
              <div class="proof-sub">LTMI Wilayah XVII — Riau &amp; Kepulauan Riau</div>
            </div>
          </div>
          <div class="proof-chip">
            <img src="assets/audy-award.jpg" alt="Audy Oktavia dengan piagam penghargaan">
            <div>
              <div class="proof-title">Delegasi Universitas Hang Tuah Pekanbaru </div>
              <div class="proof-sub">Program Studi Sistem Informasi</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section id="kisah" class="testi-section">
  <div class="wrap">
    <div class="section-head center">
      <div class="eyebrow on-ink"><span class="dot"></span>Kisah Sukses</div>
      <h2>Dari sekadar portofolio, jadi proyek beneran</h2>
      <p>Cerita nyata talenta yang membangun karier lepas mereka lewat papan Auvia.</p>
    </div>
  </div>
  <div class="testi-track-wrap">
    <div class="testi-row left">
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Klien pertama dari Auvia datang di minggu kedua saya buka etalase — sekarang saya freelance penuh waktu.</p><div class="quote-foot"><div><div class="qname">Raka Aditya</div><div class="qrole">Desainer Produk</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Papan Auvia bikin saya tahu tarif pasar sebelum negosiasi, jadi nggak pernah dibayar murah lagi.</p><div class="quote-foot"><div><div class="qname">Nadia Putri</div><div class="qrole">Full-Stack Developer</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Sistem eskrow yang bikin tenang — dana aman sampai proyeknya benar-benar diterima klien.</p><div class="quote-foot"><div><div class="qname">Yusuf Hakim</div><div class="qrole">Copywriter Iklan</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Enam bulan di Auvia, 40 proyek selesai. Ternyata reputasi memang benar-benar dihitung di sini.</p><div class="quote-foot"><div><div class="qname">Clara Wijaya</div><div class="qrole">Motion Designer</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Klien pertama dari Auvia datang di minggu kedua saya buka etalase — sekarang saya freelance penuh waktu.</p><div class="quote-foot"><div><div class="qname">Raka Aditya</div><div class="qrole">Desainer Produk</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Papan Auvia bikin saya tahu tarif pasar sebelum negosiasi, jadi nggak pernah dibayar murah lagi.</p><div class="quote-foot"><div><div class="qname">Nadia Putri</div><div class="qrole">Full-Stack Developer</div></div></div></div>
    </div>
    <div class="testi-row right">
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">SEO klien saya naik dalam 2 bulan, dan Auvia yang menghubungkan kami lewat papan kategori.</p><div class="quote-foot"><div><div class="qname">Dimas Pratama</div><div class="qrole">SEO Specialist</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Dashboard pertama saya di Auvia berujung jadi kontrak bulanan dengan klien yang sama.</p><div class="quote-foot"><div><div class="qname">Salsabila Rahma</div><div class="qrole">Data Analyst</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Klien pertama dari Auvia datang di minggu kedua saya buka etalase — sekarang saya freelance penuh waktu.</p><div class="quote-foot"><div><div class="qname">Raka Aditya</div><div class="qrole">Desainer Produk</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Papan Auvia bikin saya tahu tarif pasar sebelum negosiasi, jadi nggak pernah dibayar murah lagi.</p><div class="quote-foot"><div><div class="qname">Nadia Putri</div><div class="qrole">Full-Stack Developer</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">SEO klien saya naik dalam 2 bulan, dan Auvia yang menghubungkan kami lewat papan kategori.</p><div class="quote-foot"><div><div class="qname">Dimas Pratama</div><div class="qrole">SEO Specialist</div></div></div></div>
      <div class="quote-card"><div class="quote-mark">“</div><p class="text">Dashboard pertama saya di Auvia berujung jadi kontrak bulanan dengan klien yang sama.</p><div class="quote-foot"><div><div class="qname">Salsabila Rahma</div><div class="qrole">Data Analyst</div></div></div></div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq">
  <div class="wrap">
    <div class="faq-grid">
      <div class="faq-copy">
        <div class="eyebrow"><span class="dot"></span>Sebelum Mulai</div>
        <h2>Pertanyaan yang sering ditanyakan</h2>
        <p>Belum ketemu jawabannya? Tim Auvia siap bantu lewat sesi singkat.</p>
        <a href="#" class="btn btn-primary" style="width:fit-content;">Hubungi Tim Auvia</a>
      </div>
      <div class="faq-list" id="faqList">
        <div class="faq-item">
          <button class="faq-q"><span class="num">01</span><span class="qtext">Apakah saya bisa daftar tanpa pengalaman proyek sebelumnya?</span><span class="icon"></span></button>
          <div class="faq-a"><p>Bisa. Talenta baru mendapat label "Etalase Baru" agar tetap terlihat oleh klien, dan bisa membangun reputasi lewat proyek-proyek kecil bertarif ramah dulu.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q"><span class="num">02</span><span class="qtext">Bagaimana cara kerja sistem eskrow di Auvia?</span><span class="icon"></span></button>
          <div class="faq-a"><p>Klien membayar ke rekening penampung Auvia saat proyek dimulai. Dana baru diteruskan ke talenta setelah klien menandai hasil kerja sebagai diterima, atau otomatis setelah masa revisi berakhir.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q"><span class="num">03</span><span class="qtext">Apakah ada biaya untuk membuka etalase?</span><span class="icon"></span></button>
          <div class="faq-a"><p>Membuka etalase gratis. Auvia hanya mengambil komisi kecil dari setiap transaksi yang berhasil cair, jadi kamu tidak membayar apa pun di muka.</p></div>
        </div>
        <div class="faq-item">
          <button class="faq-q"><span class="num">04</span><span class="qtext">Bagaimana jika terjadi sengketa dengan klien atau talenta?</span><span class="icon"></span></button>
          <div class="faq-a"><p>Tim mediasi Auvia akan meninjau riwayat chat dan detail brief sebelum dana dilepas, memastikan keputusan diambil berdasarkan bukti, bukan sepihak.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="wrap">
    <div class="footer-top">
      <div class="footer-about">
        <a href="#" class="logo">
          <svg class="logo-mark" viewBox="0 0 32 32" fill="none">
            <rect x="4" y="4" width="24" height="11" rx="4" fill="#E8A33D"/>
            <rect x="4" y="17" width="24" height="11" rx="4" fill="#F1EFE6" fill-opacity="0.9"/>
            <circle cx="16" cy="15.5" r="2.4" fill="#14172A"/>
          </svg>
          Auvia.
        </a>
        <p>Papan bursa keahlian digital yang dirancang oleh Audy Oktavia — mempertemukan talenta lepas dan klien lewat tarif dan reputasi yang transparan.</p>
        <div class="footer-social">
          <a class="social-btn" href="#" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="5"/><circle cx="12" cy="12" r="3.4"/><circle cx="17" cy="7" r="0.6" fill="#F1EFE6"/></svg></a>
          <a class="social-btn" href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><rect x="4" y="4" width="16" height="16" rx="3"/><path d="M9 10v6M9 8v.01M13 16v-3.5a2 2 0 014 0V16"/></svg></a>
          <a class="social-btn" href="#" aria-label="X"><svg viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M5 5l14 14M19 5L5 19"/></svg></a>
        </div>
      </div>
      <div class="footer-col">
        <h4>Produk</h4>
        <ul>
          <li><a href="#">Jelajahi Talenta</a></li>
          <li><a href="#">Buka Etalase</a></li>
          <li><a href="#">Papan Auvia</a></li>
          <li><a href="#">API Developer</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Perusahaan</h4>
        <ul>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="#">Pers &amp; Media</a></li>
          <li class="badge-row"><a href="#">Karier</a><span class="mini-badge">Sedang Merekrut</span></li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Bantuan</h4>
        <ul>
          <li><a href="#">Pusat Bantuan</a></li>
          <li><a href="#">Keamanan &amp; Eskrow</a></li>
          <li><a href="#">Syarat &amp; Ketentuan</a></li>
          <li><a href="#">Kebijakan Privasi</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Auvia. Seluruh hak cipta dilindungi.</span>
      <span>Dirancang &amp; dikembangkan oleh Audy Oktavia</span>
    </div>
  </div>
</footer>

<script>
  // Split-flap board cycling
  (function(){
    const rows = document.querySelectorAll('#board .board-row');
    const alt = [
      [{code:'UI-014',skill:'Desain Produk',rate:'Rp450K',status:'DIBUKA',state:'open'},
       {code:'UI-014',skill:'Desain Ilustrasi',rate:'Rp380K',status:'DIBUKA',state:'open'}],
      [{code:'DEV-207',skill:'Front-End React',rate:'Rp750K',status:'DIBUKA',state:'open'},
       {code:'DEV-208',skill:'Back-End Node.js',rate:'Rp700K',status:'2 SLOT',state:'limited'}],
      [{code:'CPY-118',skill:'Copywriting Iklan',rate:'Rp250K',status:'2 SLOT',state:'limited'},
       {code:'CPY-121',skill:'Naskah Email',rate:'Rp180K',status:'DIBUKA',state:'open'}],
      [{code:'MKT-092',skill:'SEO & Ads',rate:'Rp500K',status:'DIBUKA',state:'open'},
       {code:'MKT-096',skill:'Social Media Ads',rate:'Rp420K',status:'DIBUKA',state:'open'}],
      [{code:'VID-045',skill:'Motion Graphic',rate:'Rp600K',status:'PENUH',state:'full'},
       {code:'VID-050',skill:'Edit Video Pendek',rate:'Rp350K',status:'DIBUKA',state:'open'}],
    ];
    rows.forEach((row, i) => {
      let idx = 0;
      setInterval(() => {
        idx = (idx + 1) % alt[i].length;
        const entry = alt[i][idx];
        row.classList.add('flipping');
        setTimeout(() => {
          row.querySelector('.code').textContent = entry.code;
          row.querySelector('.skill').textContent = entry.skill;
          row.querySelector('.rate').textContent = entry.rate;
          row.querySelector('.st-label').textContent = entry.status;
          row.querySelector('.status-dot').setAttribute('data-state', entry.state);
          row.classList.remove('flipping');
        }, 260);
      }, 3200 + i * 500);
    });
  })();

  // Carousel controls
  (function(){
    const track = document.getElementById('talentCarousel');
    const prev = document.getElementById('prevBtn');
    const next = document.getElementById('nextBtn');
    if(!track) return;
    const scrollAmt = () => track.querySelector('.talent-card').offsetWidth + 22;
    prev.addEventListener('click', () => track.scrollBy({left: -scrollAmt(), behavior:'smooth'}));
    next.addEventListener('click', () => track.scrollBy({left: scrollAmt(), behavior:'smooth'}));
  })();

  // FAQ accordion
  (function(){
    document.querySelectorAll('.faq-item').forEach(item => {
      const btn = item.querySelector('.faq-q');
      const answer = item.querySelector('.faq-a');
      btn.addEventListener('click', () => {
        const isOpen = item.classList.contains('open');
        document.querySelectorAll('.faq-item.open').forEach(other => {
          if(other !== item){
            other.classList.remove('open');
            other.querySelector('.faq-a').style.maxHeight = null;
          }
        });
        if(isOpen){
          item.classList.remove('open');
          answer.style.maxHeight = null;
        } else {
          item.classList.add('open');
          answer.style.maxHeight = answer.scrollHeight + 'px';
        }
      });
    });
  })();
</script>
</body>
</html>